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
    <title><?php echo fetch_page_title($conn, "Contact");?></title>
    <?php require 'assets/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php include 'assets/_preloader.php';?>
    <?php include 'assets/_floatingbar.php';?>
    <?php require 'assets/_header.php';?>
    <div class="contactbox w-full px-4 lg:px-[4.5rem] flex flex-col items-center">
        <div class="herosection w-full flex flex-col-reverse justify-center lg:flex-row lg:justify-between items-center mb-3">
            <div class="herotitle w-full lg:w-auto px-2 lg:px-0 lg:mt-16 lg:mb-10 2xl:mt-24 2xl:mb-32">
                <p class="text-xl lg:text-2xl my-3 lg:my-2">Contact Me 🛸</p>
                <h1 class="text-2xl lg:text-3xl mt-1 mb-4 lg:mt-2 lg:mb-3 lg:whitespace-nowrap font-bold">Ring, <span class="text-accent_primary">Ring!</span> let's <span class="text-accent_primary">Talk</span></h1>
                <h2 class="text-lg mt-3 mb-1 lg:mt-2 lg:mb-1 lg:whitespace-nowrap">You're just one <span class="text-accent_primary font-bold">step</span> away from reaching out!</h2>
                <h3 class="text-lg mt-1 mb-3 lg:mt-1 lg:mb-2 lg:whitespace-nowrap">I'd love to <span class="text-accent_primary font-bold">hear from you</span> just drop a <span class="text-accent_primary font-bold">message</span></h3>
                <div class="w-full flex justify-start items-center my-7 lg:my-6">
                    <button class="w-fit px-5 py-1 my-2 mr-2 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="window.open('', '_blank')"><i class="text-bg_primary fa-brands fa-whatsapp"></i> WhatsApp</button>
                    <button class="w-fit px-5 py-1 my-2 ml-2 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="window.open('', '_blank')"><i class="text-bg_primary fa-brands fa-telegram"></i> Telegram</button>
                </div>
            </div>
            <div class="heroimage w-full h-full flex justify-center lg:justify-end items-center mt-10 lg:mt-0">
                <div class="wrapper w-[250px] lg:w-[350px] mb-20 mt-10 lg:mb-0 lg:mt-5 lg:mr-10 z-20">
                    <img src="./assets/images/contact-heroimage.svg" alt="heroimage">
                </div>
                <div class="absolute bg-accent_primary w-[70px] h-[70px] rounded-full shadow-[0px_0px_120px_20px] shadow-accent_primary_transparent blur-2xl mr-0 mb-[2rem] lg:mb-0 lg:mr-[12.5rem] lg:mt-[3.5rem]"></div>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <script type="text/javascript" src="assets/js/preloader-config.js"></script>
    <script type="text/javascript" src="assets/js/floatingbar-config.js"></script>
    <script type="text/javascript" src="assets/js/keybinding-config.js"></script>
</body>
</html>