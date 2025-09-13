<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader and Dotenv
require 'vendor/autoload.php';

// Load Env Variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Error reporting - only show errors in development
if ($_ENV['APP_ENV'] === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Set content type to JSON
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Initialize response array
$response = ['success' => false, 'error' => ''];

// Function definitions
function validateTurnstile($token) {
    $secretKey = $_ENV['TURNSTILE_SECRET_KEY'];

    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $token
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === false) {
        return false;
    }
    
    $outcome = json_decode($result, true);
    return $outcome['success'] ?? false;
}

function processUploadedFile($file) {
    // Check if file was actually uploaded
    if (!isset($file['error']) || $file['error'] === UPLOAD_ERR_NO_FILE) {
        return null;
    }

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('File upload failed with error code: ' . $file['error']);
    }

    // Validate file size (from ENV)
    $maxFileSize = $_ENV['MAX_FILE_SIZE'] ?? (5 * 1024 * 1024);
    if ($file['size'] > $maxFileSize) {
        throw new Exception('File size exceeds the ' . ($maxFileSize / (1024 * 1024)) . 'MB limit');
    }

    // Validate file type
    $allowedTypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/webp',
        'image/avif',
        'image/svg+xml'
    ];

    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($fileInfo, $file['tmp_name']);
    finfo_close($fileInfo);

    if (!in_array($mimeType, $allowedTypes)) {
        throw new Exception('Fisier invalid. Tipuri de fisiere acceptate: JPEG, PNG, GIF, WebP, AVIF, SVG');
    }

    // Sanitize filename
    $originalName = $file['name'];
    $sanitizedName = preg_replace("/[^a-zA-Z0-9._-]/", "_", $originalName);

    return [
        'tmp_name' => $file['tmp_name'],
        'name' => $sanitizedName,
        'type' => $mimeType
    ];
}

function sendEmail($name, $phone, $description, $attachment = null) {
    $mail = new PHPMailer(true);

    try {
        // Server settings from environment variables
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USERNAME'];
        $mail->Password = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = $_ENV['SMTP_ENCRYPTION'];
        $mail->Port = $_ENV['SMTP_PORT'];

        // Recipients from environment variables
        $mail->setFrom($_ENV['EMAIL_FROM'], $_ENV['EMAIL_FROM_NAME']);
        $mail->addAddress($_ENV['EMAIL_TO']);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Project Inquiry from ' . $name;

        // Email body
        $body = "
            <h2>New Project Inquiry</h2>
            <p><strong>Nume:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Telefon:</strong> " . htmlspecialchars($phone) . "</p>
            <p><strong>Descriere:</strong><br>" . nl2br(htmlspecialchars($description)) . "</p>";

        $mail->Body = $body;
        $mail->AltBody = strip_tags($body);

        // Add attachment if it exists
        if ($attachment) {
            $mail->addAttachment(
                $attachment['tmp_name'],
                $attachment['name']
            );
        }

        // Send email
        return $mail->send();

    } catch (Exception $e) {
        throw new Exception("Email could not be sent. Error: {$mail->ErrorInfo}");
    }
}

// Main execution
try {
    // Validate Turnstile captcha
    if (empty($_POST['cf-turnstile-response'])) {
        throw new Exception('Verificarea CAPTCHA este necesară');
    }

    $turnstileResponse = validateTurnstile($_POST['cf-turnstile-response']);
    if (!$turnstileResponse) {
        throw new Exception('Verificarea CAPTCHA a eșuat');
    }

    // Get and sanitize form data (replaced deprecated FILTER_SANITIZE_STRING)
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $description = isset($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : '';
    
    // Validate required fields
    if (empty($name) || empty($phone)) {
        throw new Exception('Numele și telefonul sunt obligatorii');
    }
    
    // Process file upload if exists
    $attachment = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $attachment = processUploadedFile($_FILES['image']);
    }
    
    // Send email
    $mailSent = sendEmail($name, $phone, $description, $attachment);
    
    if ($mailSent) {
        $response['success'] = true;
        $response['message'] = 'Mesajul a fost trimis cu succes!';
    } else {
        throw new Exception('Trimiterea emailului a eșuat');
    }
    
} catch (Exception $e) {
    http_response_code(400);
    $response['error'] = $e->getMessage();
}

// Return JSON response
echo json_encode($response);
?>