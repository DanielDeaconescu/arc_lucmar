<?php

// session
session_start();

date_default_timezone_set('Europe/Bucharest');

// calculate the date
$days = [1 => 'Luni', 2 => 'Marti', 3 => 'Miercuri', 4 => 'Joi', 5 => 'Vineri', 6 => 'Sambata', 7 => 'Duminica'];
$day_num = date('N', strtotime(date("l")));
$day_of_week = $days[$day_num];

$months = [1 => 'Ianuarie', 2 => 'Februarie', 3 => 'Martie', 4 => 'Aprilie', 5 => 'Mai', 6 => 'Iunie', 7 => 'Iulie', 8 => 'August', 9 => 'Septembrie', 10 => 'Octombrie', 11 => 'Noiembrie', 12 => 'Decembrie'];

$current_month = date("n");
$month_date = $months[$current_month];
$current_date = date("d ") . $month_date . date(" Y");

$current_time = date("H:i");



header('Content-Type: application/json');

// load dependecies
require 'vendor/autoload.php';

// load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// Validate CAPTCHA
if (empty($_POST['cf-turnstile-response'])) {
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
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Verificarea CAPTCHA a esuat!']);
    exit;
}

// Get and validate form data
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$description = trim($_POST['description'] ?? '');

if (empty($name) || empty($phone) || empty($description)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Nume, telefon si descriere sunt obligatorii!']);
    exit;
}

// Process the file upload if it exists
$attachment = null;
if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['image'];

    // Basic file validation
    $maxSize = $_ENV['MAX_FILE_SIZE'] ?? (5 * 1024 * 1024);
    if ($file['size'] > $maxSize) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'File is too large']);
        exit;
    }

    $allowedTypes = ["image/jpeg", "image/png", "image/gif", "image/webp", "image/avif", "image/svg+xml"];

    $fileType = mime_content_type($file['tmp_name']);

    if (!in_array($fileType, $allowedTypes)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Invalid file type']);
        exit;
    }

    $attachment = $file;
}

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

    // Email content
    $mail->setFrom($_ENV['EMAIL_FROM'], $_ENV['EMAIL_FROM_NAME']);
    $mail->addAddress($_ENV['EMAIL_TO']);
    $mail->Subject = "Cerere Website - Arc Lucmar ($name, $current_date, $current_time)";

    $mail->isHTML(true);
    $mail->Body = "
        <h2>Un vizitator a completat formularul de pe website cu datele de mai jos: </h2>
        <p><strong>Nume:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Telefon:</strong> " . htmlspecialchars($phone) . "</p>
        <p><strong>Descrierea proiectului:</strong><br>" .nl2br(htmlspecialchars($description)) . "</p> ";

    // Add attachment if it exists
    if ($attachment) {
        $mail->addAttachment($attachment['tmp_name'], $attachment['name']);
    }

    // Send email
    if ($mail->send()) {
        // Set a session flag
        $_SESSION['form_submitted'] = true;

        echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
    }

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Failed to send email']);
}

?>