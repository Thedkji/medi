<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    header('Content-Type: application/json');

    // Bật ghi log lỗi
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', 'error_log.txt');
    error_reporting(E_ALL);

    // Hàm trả về JSON và thoát
    function respond($success, $message) {
        echo json_encode(['success' => $success, 'message' => $message]);
        exit;
    }

    // Kiểm tra phương thức yêu cầu
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        respond(false, 'Yêu cầu không hợp lệ!');
    }

    // Kiểm tra email
    $contact = filter_var($_POST['contact'] ?? '', FILTER_SANITIZE_EMAIL);
    if (!$contact || !filter_var($contact, FILTER_VALIDATE_EMAIL)) {
        respond(false, 'Email không hợp lệ!');
    }

    // Kiểm tra reCAPTCHA
    $private_key = "6Lf-wD0rAAAAAJuSTV9GRRKGPLnBYuR46ic4ZLU4";
    $response_key = $_POST['g-recaptcha-response'] ?? '';
    if (empty($response_key)) {
        error_log('Lỗi: Không nhận được reCAPTCHA response.');
        respond(false, 'Vui lòng xác minh reCAPTCHA!', ['step' => 'check_recaptcha']);
    }

    $verify_url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $private_key,
        'response' => $response_key,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verify_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Tắt verify SSL tạm thời để test
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_VERBOSE, true);

    $response = curl_exec($ch);
    $curl_error = curl_error($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response === false) {
        error_log('Lỗi cURL: ' . $curl_error);
        respond(false, 'Lỗi kết nối đến dịch vụ reCAPTCHA!', [
            'step' => 'recaptcha_connection',
            'error' => $curl_error,
            'http_code' => $http_code
        ]);
    }


    if ($response === false) {
        $error = error_get_last();
        respond(false, 'Lỗi kết nối đến dịch vụ reCAPTCHA!', ['step' => 'Lỗi kết nối api', 'error' => $error['message'] ?? 'Lỗi kết nối đến dịch vụ reCAPTCHA!']);
    }
    $response_data = json_decode($response, true);
    if ($response_data === null) {
        respond(false, 'Lỗi xử lý phản hồi reCAPTCHA!', ['step' => 'Api google ko phản hồi']);
    }
    if (!$response_data['success']) {
        $error_codes = $response_data['error-codes'] ?? ['unknown-error'];
        error_log('Lỗi: Xác minh reCAPTCHA thất bại. Error codes: ' . json_encode($error_codes));
        respond(false, 'Xác minh reCAPTCHA không thành công!', ['step' => 'recaptcha_verify', 'error_codes' => $error_codes]);
    }
    // end captcha

    // Cấu hình PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'octtest08@gmail.com';
        $mail->Password = 'wbyk ejyj gqli jkev';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('octtest08@gmail.com', 'Clinic 365');    
        $mail->addAddress($contact);
        $mail->isHTML(true);
        $mail->Subject = 'Chào mừng bạn đến với Clinic 365';
        $mail->Body = '<h1>Cảm ơn bạn đã đăng ký!</h1><p>Chúng tôi sẽ liên hệ với bạn sớm.</p>';

        $mail->send();
        respond(true, 'Email đã được gửi thành công!');
    } catch (Exception $e) {
        error_log('PHPMailer Error: ' . $e->getMessage());
        respond(false, 'Lỗi khi gửi email: ' . $e->getMessage());
    }
?>