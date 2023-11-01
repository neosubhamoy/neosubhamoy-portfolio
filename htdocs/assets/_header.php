<?php
function isPageActive($pageName) {
    $currentPage = $_SERVER['PHP_SELF'];
    if (strpos($currentPage, $pageName) !== false) {
        return 'w-full';
    }
    return '';
}
?>

<nav class="w-full flex justify-between items-center py-5 lg:py-9 px-4 lg:px-[3.5rem]">
    <div class="logo ml-2 lg:ml-4">
        <a class="font-cormorant text-4xl font-bold" href="index.php">Subhamoy</a>
    </div>
    <div class="widemenu mr-4 hidden lg:block">
        <a class="mx-5 py-[0.30rem] relative group" href="projects.php">
            Projects
            <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('projects.php');?> group-hover:w-full"></span>
        </a>
        <a class="mx-5 py-[0.30rem] relative group" href="blog.php">
            Blog
            <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('blog.php');?> group-hover:w-full"></span>
        </a>
        <a class="mx-5 py-[0.30rem] relative group" href="contact.php">
            Contact
            <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('contact.php');?> group-hover:w-full"></span>
        </a>
        <button class="ml-5 px-3 py-1 border-[2px] border-accent_primary rounded-full hover:rounded-lg hover:shadow-lg hover:shadow-accent_primary_transparent transition transform duration-500" onclick="location.href='contact.php'">Let's Talk</button>
    </div>
    <div class="hamburger mr-3 mt-1 lg:hidden cursor-pointer">
        <i class="fa-solid fa-bars text-2xl text-accent_primary" onclick="showNavslider()"></i>
    </div>
    <div class="slidercontainer hidden flex-col justify-between items-center lg:hidden fixed top-0 left-0 w-screen h-screen overflow-hidden z-50 bg-bg_primary" id="slidercontainer">
        <div class="mobilemenuheader w-full flex flex-col">
            <div class="topnavbarumobile flex justify-between items-center py-5 px-4">
                <a class="font-cormorant text-4xl font-bold ml-2" href="index.php">Subhamoy</a>
                <i class="fa-solid fa-xmark text-3xl text-accent_primary mr-3 cursor-pointer" onclick="closeNavslider()"></i>
            </div>
            <div class="mobilemenu flex flex-col mt-5" id="mobilemenu">
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="index.php">
                    Home Page
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('index.php');?> group-hover:w-full"></span>
                </a>
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="projects.php">
                    My Projects
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('projects.php');?> group-hover:w-full"></span>
                </a>
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="blog.php">
                    My Blog
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('blog.php');?> group-hover:w-full"></span>
                </a>
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="contact.php">
                    Contact Me
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('contact.php');?> group-hover:w-full"></span>
                </a>
            </div>
        </div>
        <div class="mobilemenufooter w-full flex flex-col mb-20">
            <button class="mx-6 px-7 py-2 border-[2px] border-accent_primary rounded-lg hover:rounded-lg hover:shadow-lg hover:shadow-accent_primary_transparent transition transform duration-500" onclick="location.href='contact.php'">Let's Talk</button>
            <div class="flex justify-center items-center mt-7 text-xl">
                <?php

                $header_socials = fetch_all_records($conn, "socials");

                if($header_socials -> num_rows > 0) {
                    //show all social links
                    while($header_social = $header_socials -> fetch_assoc()) {
                        echo "
                        <i class='text-accent_primary mx-2 ".$header_social['icon']."' onclick=\"window.open('".$header_social['link']."')\"></i>
                        ";
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <script>function _0xa4c7(){var _0x2df2d6=['71704ruDKVP','479420fnaUdi','1486702nnHjGm','removeClass','2702664PycxSf','flex','hidden','2400204poixzv','1983618txElNe','2xbgBwD','#slidercontainer','2301276xzrQnn','addClass'];_0xa4c7=function(){return _0x2df2d6;};return _0xa4c7();}(function(_0x29c1be,_0x373893){var _0x3b026c=_0x4f04,_0x2c2a87=_0x29c1be();while(!![]){try{var _0x145245=parseInt(_0x3b026c(0xb0))/0x1*(-parseInt(_0x3b026c(0xb4))/0x2)+parseInt(_0x3b026c(0xbc))/0x3+-parseInt(_0x3b026c(0xbb))/0x4+-parseInt(_0x3b026c(0xb5))/0x5+parseInt(_0x3b026c(0xb2))/0x6+-parseInt(_0x3b026c(0xb6))/0x7+parseInt(_0x3b026c(0xb8))/0x8;if(_0x145245===_0x373893)break;else _0x2c2a87['push'](_0x2c2a87['shift']());}catch(_0x10dbf7){_0x2c2a87['push'](_0x2c2a87['shift']());}}}(_0xa4c7,0x62480));function _0x4f04(_0x4cb2a0,_0x4f0b95){var _0xa4c77f=_0xa4c7();return _0x4f04=function(_0x4f04ae,_0x4b3fa7){_0x4f04ae=_0x4f04ae-0xb0;var _0x147b30=_0xa4c77f[_0x4f04ae];return _0x147b30;},_0x4f04(_0x4cb2a0,_0x4f0b95);}function showNavslider(){var _0x1655f9=_0x4f04;$(_0x1655f9(0xb1))[_0x1655f9(0xb7)](_0x1655f9(0xba)),$('#slidercontainer')[_0x1655f9(0xb3)]('flex');}function closeNavslider(){var _0x1b4a44=_0x4f04;$(_0x1b4a44(0xb1))['removeClass'](_0x1b4a44(0xb9)),$(_0x1b4a44(0xb1))[_0x1b4a44(0xb3)](_0x1b4a44(0xba));}</script>
</nav>