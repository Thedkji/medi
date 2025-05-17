<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = filter_var($_POST['contact'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($contact, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['message' => 'Email không hợp lệ!']);
        http_response_code(400);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'octtest08@gmail.com';
        $mail->Password = 'wbyk ejyj gqli jkev';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('octtest08@gmail.com', 'Clinic 365');
        $mail->addAddress($contact);
        $mail->isHTML(true);
        $mail->Subject = 'Chào mừng bạn đến với Clinic 365';
        $mail->Body = '<h1>Cảm ơn bạn đã đăng ký!</h1><p>Chúng tôi sẽ liên hệ với bạn sớm.</p>';
        $mail->AltBody = 'Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ sớm.';

        $mail->send();
        echo json_encode(['message' => 'Email đã được gửi thành công!']);
        http_response_code(200);
    } catch (Exception $e) {
        echo json_encode(['message' => 'Lỗi khi gửi email: ' . $mail->ErrorInfo]);
        http_response_code(500);
    }
} else {
    echo json_encode(['message' => 'Yêu cầu không hợp lệ!']);
    http_response_code(405);
}
?>