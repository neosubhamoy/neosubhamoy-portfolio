<?php
//Collect database info
require '../db_info.php';

//Connect with Database
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn -> connect_error) {
     die("Database Connection Failed !" . $conn->connect_error);
    }
    echo "";
?>