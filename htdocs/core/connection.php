<?php
//Connect with Database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "neosubhamoy";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn -> connect_error) {
     die("Database Connection Failed !" . $conn->connect_error);
    }
    echo "";
?>