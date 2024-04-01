<?php
require 'core/connection.php';
require 'core/host_config.php';
require 'core/query_functions.php';
require 'core/write_dataset.php';
write_dataset($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Page Not Found - @neo_subhamoy</title>
    <?php require 'assets/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php include 'assets/_preloader.php';?>
    <?php include 'assets/_floatingbar.php';?>
    <?php require 'assets/_header.php';?>
    <div class="errorbox w-full px-4 lg:px-[4.5rem]">
        <div class="mainsection w-full flex flex-col justify-center lg:flex-row items-center mt-28 lg:mt-20 mb-60">
            <div class="bannerwrapper w-[250px] lg:w-[350px] lg:mr-5">
                <img src="assets/images/error_banner.svg" alt="error-icon">
            </div>
            <div class="errortitle text-center lg:text-start mt-5 lg:mt-0 lg:ml-5 lg:max-w-[40%]">
                <h1 class="text-accent_primary text-9xl">404</h1>
                <h2 class="text-4xl">Page Not Found!</h2>
                <p class="text-accent_three mt-7">The page you are looking for might have been removed had it's name changed or temporarily unavailable</p>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <script type="text/javascript" src="assets/js/preloader-config.js"></script>
    <script type="text/javascript" src="assets/js/navmenu-config.js"></script>
    <script type="text/javascript" src="assets/js/floatingbar-config.js"></script>
    <script type="text/javascript" src="assets/js/keybinding-config.js"></script>
</body>
</html>