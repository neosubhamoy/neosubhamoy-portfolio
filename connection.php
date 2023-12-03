<?php
//Database info - (for loclhost)
$hostname = "localhost";
$username = "root";
$password = "";
$database = "neosubhamoy";

//Connect with Database
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn -> connect_error) {
     die("Database Connection Failed !" . $conn->connect_error);
    }
    echo "";
?>