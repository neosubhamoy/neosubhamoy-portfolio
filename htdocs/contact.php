<?php
require 'core/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

require 'core/connection.php';
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
                    <button class="w-fit px-5 py-1 my-2 mr-2 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="location.href='#contactsection'"><i class="fa-solid fa-chevron-down"></i> Get Details</button>
                </div>
            </div>
            <div class="heroimage w-full h-full flex justify-center lg:justify-end items-center mt-10 lg:mt-0">
                <div class="wrapper w-[250px] lg:w-[350px] mb-20 mt-10 lg:mb-0 lg:mt-5 lg:mr-10 z-20">
                    <img src="./assets/images/contact-heroimage.svg" alt="heroimage">
                </div>
                <div class="absolute bg-accent_primary w-[70px] h-[70px] rounded-full shadow-[0px_0px_120px_20px] shadow-accent_primary_transparent blur-2xl mr-0 mb-[2rem] lg:mb-0 lg:mr-[12.5rem] lg:mt-[3.5rem]"></div>
            </div>
        </div>
        <div id="contactsection" class="contactsection w-full flex flex-col justify-start lg:flex-row lg:justify-between items-start mt-32 mb-72 lg:mb-32 px-2 lg:px-0">
            <div class="leftsec mb-14 w-full flex flex-col justify-between lg:w-[50%] lg:mb-0">
                <div class="leftsectop">
                    <h4 class="text-2xl font-bold mb-10">My <span class="text-accent_primary">Contact</span> Details</h4>
                    <div class="contactinfocont mt-14">
                        <div class="flex items-center my-4">
                            <span class="w-[40px] h-[40px] bg-accent_primary text-bg_primary flex justify-center items-center rounded-full mr-5" title="Contact via Phone Call"><i class="fa-solid fa-phone"></i></span>
                            <p class="text-lg font-light cursor-pointer" onclick="copy_to_clipboard('+91 8695174974', 'Number')">+91 8695174974</p>
                        </div>
                        <div class="flex items-center my-4">
                            <span class="w-[40px] h-[40px] bg-accent_primary text-bg_primary flex justify-center items-center rounded-full mr-5" title="Contact via Email"><i class="fa-solid fa-envelope"></i></span>
                            <p class="text-lg font-light cursor-pointer" onclick="location.href='mailto:hey@neosubhamoy.com'">hey@neosubhamoy.com</p>
                        </div>
                        <div class="flex items-center my-4">
                            <span class="w-[40px] h-[40px] bg-accent_primary text-bg_primary flex justify-center items-center rounded-full mr-5" title="Chat with me on Telegram"><i class="fa-brands fa-telegram"></i></span>
                            <p class="text-lg font-light cursor-pointer" onclick="window.open('https://t.me/neo_subhamoy', '_blank')">t.me/neo_subhamoy</p>
                        </div>
                    </div>
                </div>
                <div class="leftsecbottom mt-10 lg:mt-[6.5rem]">
                    <div class="hoverAnimatedContainer bg-bg_secondary rounded-lg p-5 relative">
                        <span class="flex items-center text-lg justify-between">
                            <span class="">
                                <i class="fa-solid fa-house text-accent_primary"></i>
                                <span class="ml-2">Address</span>
                            </span>
                            <button class="w-fit px-5 py-1 text-base font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="window.open('https://www.google.com/maps/place/Basirhat,+West+Bengal/')"><i class="fa-solid fa-location-dot"></i> Map</button>
                        </span>
                        <div class="flex items-center mt-3">
                            <div class="wrapper w-[200px] lg:w-[100px] rounded-xl overflow-hidden">
                                <img src="assets/images/basirhat.webp" alt="basirhat">
                            </div>
                            <div class="ml-5">
                                <h5 class="">Basirhat, West Bengal, India, 743411</h5>
                                <p class="text-xs font-light text-accent_three mt-2">Basirhat is a city of West Bengal, India. It is located on the banks of the Ichamati River</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightsec w-full lg:w-[40%]">
                <form id="contactForm" class="contactform w-full flex flex-col justify-center bg-bg_secondary rounded-lg p-5" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
                    <input class="hidden" autocomplete="false" name="hidden" type="text">
                    <p class="self-start w-[40%] pb-1 text-lg mb-4 whitespace-nowrap"><i class="fa-solid fa-bell text-accent_primary"></i>&nbsp; Contact Form</p>
                    <div class="nameinputcont w-full relative my-4">
                        <input id="contactNameInput" type="text" class="peer w-full p-2 border-[2px] bg-bg_secondary border-accent_secondary_transparent rounded outline-none focus:border-accent_primary">
                        <span class="absolute text-sm -top-[0.60rem] left-4 px-3 bg-bg_secondary peer-focus:text-accent_primary">Your Full Name</span>
                    </div>
                    <div class="emailinputcont w-full relative my-4">
                        <input id="contactEmailInput" type="email" class="peer w-full p-2 border-[2px] bg-bg_secondary border-accent_secondary_transparent rounded outline-none focus:border-accent_primary invalid:border-[#ff1c49]" autocomplete="new-password">
                        <span class="absolute text-sm -top-[0.60rem] left-4 px-3 bg-bg_secondary peer-focus:text-accent_primary peer-invalid:text-[#ff1c49]">Your Email</span>
                    </div>
                    <div class="messagetextcont w-full relative my-4">
                        <textarea id="contactMessageInput" type="text" rows="5" class="peer w-full p-2 border-[2px] bg-bg_secondary border-accent_secondary_transparent rounded outline-none focus:border-accent_primary"></textarea>
                        <span class="absolute text-sm -top-[0.60rem] left-4 px-3 bg-bg_secondary peer-focus:text-accent_primary">Message</span>
                    </div>
                    <div class="captchacont w-full">
                        <div id="recaptcha" class="g-recaptcha w-full h-fit transform scale-[0.70] origin-left" data-sitekey="6Lfq2SspAAAAADDI2jvOiZ2snM_H0JENRK8vajoX" data-theme="dark"></div>
                    </div>
                    <div id="contactAlert" class="w-full mb-4"></div>
                    <div class="contactsubmit w-full">
                        <button id="contactSendButton" type="submit" class="bg-accent_primary rounded-full py-2 px-6 text-bg_primary font-bold hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500">SEND <i class="fa-regular fa-paper-plane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <script type="text/javascript" src="assets/js/preloader-config.js"></script>
    <script type="text/javascript" src="assets/js/floatingbar-config.js"></script>
    <script type="text/javascript" src="assets/js/keybinding-config.js"></script>
    <script type="text/javascript" src="assets/js/core-animation.js"></script>
    <script type="text/javascript" src="assets/js/contactform-config.js"></script>
</body>
</html>