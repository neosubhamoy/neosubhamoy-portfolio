<?php
$currentHost = $_SERVER['HTTP_HOST'];
$localIP = $_ENV['LOCAL_IP'];
$domain = $_ENV['DOMAIN'];

if($currentHost == "localhost") {
    $basePath = "https://localhost/neosubhamoy/src";
}
elseif ($currentHost == $localIP) {
    $basePath = "https://" . $localIP . "/neosubhamoy/src";
}
else {
    $basePath = "https://" . $currentHost;
}
?>