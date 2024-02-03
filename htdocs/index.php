<?php
require 'core/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

require 'core/router.php';
?>