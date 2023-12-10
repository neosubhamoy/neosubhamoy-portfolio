<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../../');
$dotenv->load();

require 'connection.php';
require 'query_functions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function form_input_filter($conn, $data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}

function send_alert($alertMessage, $alertType) {
    echo json_encode(array("alert" => $alertMessage, "alertType" => $alertType));
}

function send_contact_email($name, $email, $message) {
    require_once ("vendor/phpmailer/phpmailer/src/Exception.php");
    require_once ("vendor/phpmailer/phpmailer/src/PHPMailer.php");
    require_once ("vendor/phpmailer/phpmailer/src/SMTP.php");

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $_ENV['SMTP_PORT'];
    
        $mail->setFrom($_ENV['SMTP_USER'], 'contact@neosubhamoy.com');
        $mail->addAddress($_ENV['SMTP_SENDTO']);
    
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission by $name";
        $mail->Body    = "name: $name <br>email: $email <br>message: $message <br><a href='mailto:$email'>Quick Reply</a>";
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $jsonData = file_get_contents('php://input');
        $formData = json_decode($jsonData, true);

        $name = form_input_filter($conn, $formData['name']);
        $email = form_input_filter($conn, $formData['email']);
        $message = form_input_filter($conn, $formData['message']);
        $recaptcha = form_input_filter($conn, $formData['recaptcha']);

        if($name !== "" && $email !== "" && $message !== "") {
            if($recaptcha !== "") {
                $secret = $_ENV['RECAPTCHA_SECRET'];
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $recaptcha);
                $responseData = json_decode($verifyResponse);

                if($responseData->success) {
                    if(send_contact_email($name, $email, $message)) {
                        send_alert("Message Sent Successfully", "success");
                    }
                    else {
                        send_alert("Something went wrong! Try again later", "danger");
                    }
                }
                else {
                    send_alert("Invalid reCaptcha! Please try again", "danger");
                }
            }
            else {
                send_alert("Please check-in reCaptcha", "info");
            }
        }
        else {
            send_alert("Please fill-up all fields", "info");
        }
    }
}

?>