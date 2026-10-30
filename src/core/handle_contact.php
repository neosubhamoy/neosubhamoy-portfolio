<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function form_input_filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function send_alert($alertMessage, $alertType) {
    echo json_encode(array("alert" => $alertMessage, "alertType" => $alertType));
}

function send_contact_email($name, $email, $message) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = env('SMTP_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = env('SMTP_USER');
        $mail->Password   = env('SMTP_PASS');
        $mail->Port       = (int) env('SMTP_PORT', 465);
        //implicit TLS on 465/2465, STARTTLS on submission ports (587/2587 etc.)
        $mail->SMTPSecure = in_array($mail->Port, [465, 2465]) ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    
        $mail->setFrom('no-reply@neosubhamoy.com', 'Subhamoy Biswas');
        $mail->addAddress(env('SMTP_SENDTO'));
    
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission by $name";
        $mail->Body    = "name: $name <br>email: $email <br>message: $message <br><a href='mailto:$email'>Quick Reply</a>";
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Contact form mail failed: " . $mail->ErrorInfo);
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $jsonData = file_get_contents('php://input');
        $formData = json_decode($jsonData, true);

        $name = form_input_filter($formData['name']);
        $email = form_input_filter($formData['email']);
        $message = form_input_filter($formData['message']);
        $recaptcha = form_input_filter($formData['recaptcha']);

        if($name !== "" && $email !== "" && $message !== "") {
            if($recaptcha !== "") {
                $secret = env('RECAPTCHA_SECRET');
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?' . http_build_query(['secret' => $secret, 'response' => $recaptcha]));
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