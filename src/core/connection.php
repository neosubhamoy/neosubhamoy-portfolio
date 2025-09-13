<?php
//Collect Database info
$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

//Connect with Database
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn -> connect_error) {
     die("Database Connection Failed !" . $conn->connect_error);
    }
    echo "";
?>