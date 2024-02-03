<?php
$currentHost = $_SERVER['HTTP_HOST'];
$localIP = $_ENV['LOCAL_IP'];

if($currentHost == "localhost") {
    $basePath = "https://localhost/neosubhamoy/htdocs";
}
elseif ($currentHost == $localIP) {
    $basePath = "https://" . $localIP . "/neosubhamoy/htdocs";
}
else {
    $basePath = "https://" . $currentHost;
}
?>