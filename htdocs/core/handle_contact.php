<?php
require '../../connection.php';
require 'query_functions.php';

function form_input_filter($conn, $data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $jsonData = file_get_contents('php://input');
        $formData = json_decode($jsonData, true);

        $name = form_input_filter($conn, $formData['name']);
        $email = form_input_filter($conn, $formData['email']);
        $message = form_input_filter($conn, $formData['message']);
        $recaptcha = form_input_filter($conn, $formData['recaptcha']);

        $alertMessage = "Form Data Recived from ".$name;
        $alertType = "success";
        echo json_encode(array("alert" => $alertMessage, "alertType" => $alertType));
    }
}

?>