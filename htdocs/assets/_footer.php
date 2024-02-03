<footer class="w-full px-6 lg:px-[4.5rem]">
    <div class="fottermenu w-full flex justify-around flex-wrap lg:flex-nowrap mb-10">
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Informations</h6>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath . '/privacy-policy' ?>">Privacy Policy</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath . '/terms-of-use' ?>">Terms of Use</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath . '/dmca' ?>">Dmca Notice</a>
        </div>
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Site Pages</h6>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath ?>">Home Page</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath . '/projects' ?>">My Projects</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath . '/blog' ?>">My Blog</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="<?php echo $basePath . '/contact' ?>">Contact Me</a>
        </div>
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Featured</h6>
            <?php

            $featured_projects_footer = fetch_all_records($conn, "featured_projects");

            if($featured_projects_footer -> num_rows > 0) {
                //show all featured projects
                while($featured_footer_item = $featured_projects_footer -> fetch_assoc()) {
                    echo "
                    <a class='text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100' href='".$featured_footer_item['link']."' target='_blank'>".$featured_footer_item['name']."</a>
                    ";
                }
            }

            ?>
        </div>
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Follow Me On</h6>
            <?php

            $footer_socials = fetch_all_records($conn, "socials");
            
            if($footer_socials -> num_rows > 0) {
                //show all social links
                while($footer_social = $footer_socials -> fetch_assoc()) {
                    echo "
                    <a class='text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100' href='".$footer_social['link']."' target='_blank'>".$footer_social['platform']."</a>
                    ";
                }
            }

            ?>
        </div>
    </div>
    <hr class="opacity-20 mt-16 mb-5">
    <div class="copyrightsection w-full flex justify-between items-center mt-7 mb-12">
        <a class="font-cormorant text-4xl font-bold hidden lg:block" href="https://<?php echo $domain ?>">Subhamoy Biswas</a>
        <p class="">&#169; <script>document.write(new Date().getFullYear())</script> - All Rights Reserved<br>Developed with &#10084; in <strong>India</strong></p>
    </div>
</footer>