<?php
require 'core/connection.php';
require 'core/host_config.php';
require 'core/query_functions.php';
require 'core/write_dataset.php';
write_dataset($conn);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with me instantly, contact now">
    <meta property="og:title" content="<?php echo fetch_page_title($conn, "Contact");?>">
    <meta property="og:description" content="Contact with Subhamoy Biswas (@neo_subhamoy) - Full-Stack Web, Android Developer and UI/UX Designer">
    <meta property="og:image" content="https://<?php echo $domain ?>/assets/images/neosubhamoy.jpg">
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
                <p class="text-xl lg:text-2xl my-3 lg:my-2" data-aos="fade-right">Contact Me 🛸</p>
                <h1 class="text-2xl lg:text-3xl mt-1 mb-4 lg:mt-2 lg:mb-3 lg:whitespace-nowrap font-bold" data-aos="fade-right" data-aos-delay="100">Ring, <span class="text-accent_primary">Ring!</span> let's <span class="text-accent_primary">Talk</span></h1>
                <h2 class="text-lg mt-3 mb-1 lg:mt-2 lg:mb-1 lg:whitespace-nowrap" data-aos="fade-right" data-aos-delay="150">You're just one <span class="text-accent_primary font-bold">step</span> away from reaching out!</h2>
                <h3 class="text-lg mt-1 mb-3 lg:mt-1 lg:mb-2 lg:whitespace-nowrap" data-aos="fade-right" data-aos-delay="200">I'd love to <span class="text-accent_primary font-bold">hear from you</span> just drop a <span class="text-accent_primary font-bold">message</span></h3>
                <div class="w-full flex justify-start items-center my-7 lg:my-6" data-aos="fade-right" data-aos-delay="250">
                    <button class="w-fit px-5 py-1 my-2 mr-2 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="location.href='#contactsection'"><i class="fa-solid fa-chevron-down"></i> Get Details</button>
                </div>
            </div>
            <div class="heroimage w-full h-full flex justify-center lg:justify-end items-center mt-10 lg:mt-0">
                <div class="wrapper w-[250px] lg:w-[350px] mb-20 mt-10 lg:mb-0 lg:mt-5 lg:mr-10 z-20" data-aos="zoom-in">
                    <img src="./assets/images/contact-heroimage.svg" alt="heroimage">
                </div>
                <div class="absolute bg-accent_primary w-[70px] h-[70px] rounded-full shadow-[0px_0px_120px_20px] shadow-accent_primary_transparent blur-2xl mr-0 mb-[2rem] lg:mb-0 lg:mr-[12.5rem] lg:mt-[3.5rem]" data-aos="zoom-in" data-aos-delay="100"></div>
            </div>
        </div>
        <div id="contactsection" class="contactsection w-full flex flex-col justify-start lg:flex-row lg:justify-between items-start mt-32 mb-72 lg:mb-32 px-2 lg:px-0">
            <div class="leftsec mb-14 w-full flex flex-col justify-between lg:w-[50%] lg:mb-0">
                <div class="leftsectop">
                    <h4 class="text-2xl font-bold mb-10">My <span class="text-accent_primary">Contact</span> Details</h4>
                    <div class="contactinfocont mt-14">
                        <div class="flex items-center my-4">
                            <span class="w-[40px] h-[40px] bg-accent_primary text-bg_primary flex justify-center items-center rounded-full mr-5" title="Contact via Phone Call"><i class="fa-solid fa-phone"></i></span>
                            <p class="text-lg font-light" id="phoneNumberCont" onclick="if(document.getElementById('togglePhoneNumber').innerHTML==='hide') { copy_to_clipboard('+91 8016626636', 'Number') }">+91 80XXX 26XXX</p>
                            <button class="bg-accent_primary_transparent text-accent_primary py-[0.15rem] px-2 ml-3 text-xs rounded" onclick="if(document.getElementById('togglePhoneNumber').innerHTML==='show'){ document.getElementById('togglePhoneNumber').innerHTML='hide'; document.getElementById('phoneNumberCont').innerHTML='+91 80166 26636'; document.getElementById('phoneNumberCont').classList.add('cursor-pointer') } else { document.getElementById('togglePhoneNumber').innerHTML='show'; document.getElementById('phoneNumberCont').innerHTML='+91 80XXX 26XXX'; document.getElementById('phoneNumberCont').classList.remove('cursor-pointer') }" id="togglePhoneNumber">show</button>
                        </div>
                        <div class="flex items-center my-4">
                            <span class="w-[40px] h-[40px] bg-accent_primary text-bg_primary flex justify-center items-center rounded-full mr-5" title="Contact via Email"><i class="fa-solid fa-envelope"></i></span>
                            <p class="text-lg font-light cursor-pointer" onclick="location.href='mailto:hey@<?php echo $domain ?>'">hey@<?php echo $domain ?></p>
                        </div>
                        <div class="flex items-center my-4">
                            <span class="w-[40px] h-[40px] bg-accent_primary text-bg_primary flex justify-center items-center rounded-full mr-5" title="Chat with me on Telegram"><i class="fa-brands fa-telegram"></i></span>
                            <p class="text-lg font-light cursor-pointer" onclick="window.open('https://www.t.me/neo_subhamoy', '_blank')">t.me/neo_subhamoy</p>
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
                    <p class="self-start w-[40%] pb-1 text-lg whitespace-nowrap"><i class="fa-solid fa-bell text-accent_primary"></i>&nbsp; Contact Form</p>
                    <svg class="mb-4" width="170" height="10" viewBox="0 0 703 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 9.5C13.65 0.833334 25.3 0.833334 36.95 9.5C48.6 18.1667 60.25 18.1667 71.9 9.5C83.55 0.833334 95.2 0.833334 106.85 9.5C118.5 18.1667 130.15 18.1667 141.8 9.5C153.45 0.833334 165.1 0.833334 176.75 9.5C188.4 18.1667 200.05 18.1667 211.7 9.5C223.35 0.833334 235 0.833334 246.65 9.5C258.3 18.1667 269.95 18.1667 281.6 9.5C293.25 0.833334 304.9 0.833334 316.55 9.5C328.2 18.1667 339.85 18.1667 351.5 9.5C363.15 0.833334 374.8 0.833334 386.45 9.5C398.1 18.1667 409.75 18.1667 421.4 9.5C433.05 0.833334 444.7 0.833334 456.35 9.5C468 18.1667 479.65 18.1667 491.3 9.5C502.95 0.833334 514.6 0.833334 526.25 9.5C537.9 18.1667 549.55 18.1667 561.2 9.5C572.85 0.833334 584.5 0.833334 596.15 9.5C607.8 18.1667 619.45 18.1667 631.1 9.5C642.75 0.833334 654.4 0.833334 666.05 9.5C677.7 18.1667 689.35 18.1667 701 9.5" stroke="#38BDF8" stroke-width="8"/>
                    </svg>
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
                    <div id="contactAlert" class="w-full"></div>
                    <div class="contactsubmit w-full mt-4">
                        <button id="contactSendButton" type="submit" class="bg-accent_primary rounded-full py-2 px-6 text-bg_primary font-bold hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500">SEND <i class="fa-regular fa-paper-plane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <?php require 'assets/_commonjs.php';?>
    <script type="text/javascript" src="assets/js/core-animation.js"></script>
    <script type="text/javascript" src="assets/js/contactform-config.js"></script>
</body>
</html>