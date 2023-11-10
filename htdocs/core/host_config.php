<?php
$currentHost = $_SERVER['HTTP_HOST'];

if($currentHost == "localhost") {
    $basePath = "https://localhost/neosubhamoy/htdocs";
}
else {
    $basePath = "https://" . $currentHost;
}
?>