<?php
$currentHost = $_SERVER['HTTP_HOST'];

if($currentHost == "localhost") {
    $basePath = "https://localhost/neosubhamoy/htdocs";
}
elseif ($currentHost == "192.168.29.177") {
    $basePath = "https://192.168.29.177/neosubhamoy/htdocs";
}
else {
    $basePath = "https://" . $currentHost;
}
?>