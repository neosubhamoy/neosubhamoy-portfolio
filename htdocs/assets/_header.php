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
        <a class="font-cormorant text-4xl font-bold" href="<?php echo $basePath ?>">Subhamoy</a>
    </div>
    <div class="widemenu mr-4 hidden lg:block">
        <a class="mx-5 py-[0.30rem] relative group" href="<?php echo $basePath . '/projects' ?>">
            Projects
            <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('projects.php');?> group-hover:w-full"></span>
        </a>
        <a class="mx-5 py-[0.30rem] relative group" href="<?php echo $basePath . '/blog' ?>">
            Blog
            <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('blog.php');?> group-hover:w-full"></span>
        </a>
        <a class="mx-5 py-[0.30rem] relative group" href="<?php echo $basePath . '/contact' ?>">
            Contact
            <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('contact.php');?> group-hover:w-full"></span>
        </a>
        <button class="ml-5 px-3 py-1 border-[2px] border-accent_primary rounded-full hover:rounded-lg hover:shadow-lg hover:shadow-accent_primary_transparent transition transform duration-500" onclick="location.href='<?php echo $basePath . '/contact' ?>'">Let's Talk</button>
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
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="<?php echo $basePath ?>">
                    Home Page
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('index.php');?> group-hover:w-full"></span>
                </a>
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="<?php echo $basePath . '/projects' ?>">
                    My Projects
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('projects.php');?> group-hover:w-full"></span>
                </a>
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="<?php echo $basePath . '/blog' ?>">
                    My Blog
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('blog.php');?> group-hover:w-full"></span>
                </a>
                <a class="ml-6 mb-4 py-[0.30rem] w-fit relative group" href="<?php echo $basePath . '/contact' ?>">
                    Contact Me
                    <span class="absolute bottom-0 left-0 h-[2px] bg-accent_primary transition-all duration-300 w-0 <?php echo isPageActive('contact.php');?> group-hover:w-full"></span>
                </a>
            </div>
        </div>
        <div class="mobilemenufooter w-full flex flex-col mb-20">
            <button class="mx-6 px-7 py-2 border-[2px] border-accent_primary rounded-lg hover:rounded-lg hover:shadow-lg hover:shadow-accent_primary_transparent transition transform duration-500" onclick="location.href='<?php echo $basePath . '/contact' ?>'">Let's Talk</button>
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
    <script type="text/javascript">
        function showNavslider(){
            $('#slidercontainer').removeClass('hidden');
            $('#slidercontainer').addClass('flex');
            $('body').addClass("overflow-hidden");
        }
        function closeNavslider(){
            $('#slidercontainer').removeClass('flex');
            $('#slidercontainer').addClass('hidden');
            $('body').removeClass("overflow-hidden");
        }
    </script>
</nav>