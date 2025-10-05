<?php

ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php-errors.log');
ini_set('display_errors', 0);
error_reporting(E_ALL);

session_start();

// Test logging
error_log("=== Form submission started ===");

// Set timezone
date_default_timezone_set('Europe/Bucharest');

// Database connection for SQLite
$db_path = __DIR__ . '/database/projects.db';
$db = null;

try {
    if (file_exists($db_path)) {
        $db = new SQLite3($db_path);
    }
} catch (Exception $e) {
    error_log("Database connection error: " . $e->getMessage());
}

// Rate limiting - ONLY if it's a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $db) {
    $ip_address = $_SERVER['REMOTE_ADDR'];
    error_log("Checking rate limit for IP: " . $ip_address);

    try {
        $stmt = $db->prepare("SELECT COUNT(*) as count FROM form_submissions WHERE ip_address = :ip AND submission_time > datetime('now', '-24 hours')");
        $stmt->bindValue(':ip', $ip_address, SQLITE3_TEXT);
        $result = $stmt->execute();
        $count = $result->fetchArray(SQLITE3_NUM);

        error_log("Current submission count: " . ($count ? $count[0] : '0'));

        if ($count && $count[0] >= 2) {
            error_log("Rate limit exceeded, redirecting to tooManyRequests.php");
            
            $_SESSION['rate_limit_exceeded'] = true;
            $_SESSION['rate_limit_time'] = time();
            
            // Return JSON instead of redirecting - let JavaScript handle the redirect
            header('Content-Type: application/json');
            http_response_code(429); // Too Many Requests
            echo json_encode(['success' => false, 'error' => 'rate_limit_exceeded', 'redirect' => 'tooManyRequests.php']);
            exit;
        }
    } catch (Exception $e) {
        error_log("Rate limiting query error: " . $e->getMessage());
    }
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Content-Type: application/json');
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// Load dependencies
require __DIR__ . '/vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
try {
    $dotenv->load();
} catch (Exception $e) {
    error_log("Dotenv error: " . $e->getMessage());
}

// Validate CAPTCHA
if (empty($_POST['cf-turnstile-response'])) {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Verificarea CAPTCHA este obligatorie!']);
    exit;
}

$captchaToken = $_POST['cf-turnstile-response'];
$secretKey = $_ENV['TURNSTILE_SECRET_KEY'];

// CAPTCHA validation
$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
$data = ['secret' => $secretKey, 'response' => $captchaToken];
$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$captchaResult = json_decode($result, true);

if (!$captchaResult['success']) {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Verificarea CAPTCHA a esuat!']);
    exit;
}

// Get and validate form data
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$description = trim($_POST['description'] ?? '');

if (empty($name) || empty($phone)) {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Numele si numarul de telefon sunt obligatorii!']);
    exit;
}

// Process the file uploads if they exist
$attachments = [];

if (!empty($_FILES['image']['name'][0])) {
    $maxSize = $_ENV['MAX_FILE_SIZE'] ?? (5 * 1024 * 1024);
    $allowedTypes = ["image/jpeg", "image/png", "image/gif", "image/webp", "image/avif", "image/svg+xml"];

    foreach ($_FILES['image']['name'] as $index => $nameFile) {
        if ($_FILES['image']['error'][$index] !== UPLOAD_ERR_OK) {
            continue;
        }

        $tmpName = $_FILES['image']['tmp_name'][$index];
        $size = $_FILES['image']['size'][$index];
        $type = mime_content_type($tmpName);

        if ($size > $maxSize) {
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode(['success' => false, 'error' => 'One of the files is too large']);
            exit;
        }

        if (!in_array($type, $allowedTypes)) {
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode(['success' => false, 'error' => 'Invalid file type: ' . $nameFile]);
            exit;
        }

        $attachments[] = [
            'tmp_name' => $tmpName,
            'name' => $nameFile
        ];
    }
}

// Calculate date for email subject
$days = [1 => 'Luni', 2 => 'Marti', 3 => 'Miercuri', 4 => 'Joi', 5 => 'Vineri', 6 => 'Sambata', 7 => 'Duminica'];
$months = [1 => 'Ianuarie', 2 => 'Februarie', 3 => 'Martie', 4 => 'Aprilie', 5 => 'Mai', 6 => 'Iunie', 7 => 'Iulie', 8 => 'August', 9 => 'Septembrie', 10 => 'Octombrie', 11 => 'Noiembrie', 12 => 'Decembrie'];

$day_num = date('N');
$day_of_week = $days[$day_num];
$current_month = date("n");
$month_date = $months[$current_month];
$current_date = date("d ") . $month_date . date(" Y");
$current_time = date("H:i");

// Send the email with PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USERNAME'];
    $mail->Password = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = $_ENV['SMTP_ENCRYPTION'];
    $mail->Port = $_ENV['SMTP_PORT'];
    $mail->Timeout = 15;

    // Email content
    $mail->setFrom($_ENV['EMAIL_FROM'], $_ENV['EMAIL_FROM_NAME']);
    $mail->addAddress($_ENV['EMAIL_TO']);
    $mail->Subject = "Cerere Website - Arc Lucmar ($name, $current_date, $current_time)";

    $mail->isHTML(true);
    $mail->Body = "
        <h2>Un vizitator a completat formularul de pe website cu datele de mai jos: </h2>
        <p><strong>Nume:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Telefon:</strong> " . htmlspecialchars($phone) . "</p>
        <p><strong>Descrierea proiectului:</strong><br>" . nl2br(htmlspecialchars($description)) . "</p>";

    // Add attachments
    if (count($attachments) > 0) {
        foreach($attachments as $file) {
            $mail->addAttachment($file['tmp_name'], $file['name']);
        }
    }

    // Send email
    if ($mail->send()) {
        // Record the submission for rate limiting
        if ($db) {
            try {
                $stmt = $db->prepare("INSERT INTO form_submissions (ip_address) VALUES (:ip)");
                $stmt->bindValue(':ip', $ip_address, SQLITE3_TEXT);
                $stmt->execute();
            } catch (Exception $e) {
                error_log("Failed to record submission: " . $e->getMessage());
            }
        }

        $_SESSION['form_submitted'] = true;

        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
        exit;
    }

} catch (Exception $e) {
    header('Content-Type: application/json');
    error_log("PHPMailer Error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Failed to send email']);
    exit;
}

// Final fallback
header('Content-Type: application/json');
http_response_code(500);
echo json_encode(['success' => false, 'error' => 'Unknown error occurred']);
exit;
?>