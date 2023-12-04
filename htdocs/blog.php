<?php
require '../connection.php';
require 'core/host_config.php';
require 'core/query_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo fetch_page_title($conn, "Blog");?></title>
    <?php require 'assets/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php include 'assets/_preloader.php';?>
    <?php include 'assets/_floatingbar.php';?>
    <?php require 'assets/_header.php';?>
    <div class="blogbox w-full px-4 lg:px-[4.5rem] flex flex-col items-center text-center">
        <div class="mt-[30vh] mb-[60vh]">
            <h1 class="text-2xl font-bold"><i class="fa-regular fa-clock fa-spin text-accent_primary"></i>&nbsp; Coming Soon</h1>
            <p class="text-base text-accent_three mt-3">Please be patience, Something intresting is cooking up...!!</p>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <script type="text/javascript" src="assets/js/preloader-config.js"></script>
    <script type="text/javascript" src="assets/js/floatingbar-config.js"></script>
    <script type="text/javascript" src="assets/js/keybinding-config.js"></script>
</body>
</html>