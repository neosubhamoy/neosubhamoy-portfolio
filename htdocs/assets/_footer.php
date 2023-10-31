<footer class="w-full px-6 lg:px-[4.5rem]">
    <div class="fottermenu w-full flex justify-around flex-wrap lg:flex-nowrap mb-10">
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Informations</h6>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="">Privacy Policy</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="">Terms of Services</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="">Dmca Notice</a>
        </div>
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Site Pages</h6>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="index.php">Home Page</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="projects.php">My Projects</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="blog.php">My Blog</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="contact.php">Contact Me</a>
        </div>
        <div class="w-[50%] lg:w-[25%] flex flex-col justify-start items-start mb-10 lg:mb-0">
            <h6 class="font-bold mb-8">Featured</h6>
            <?php

            $featured_projects_footer = fetch_featured_projects($conn);

            if($featured_projects_footer -> num_rows > 0) {
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
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="https://instagram.com/neo_subhamoy" target="_blank">Instagram</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="https://twitter.com/neo_subhamoy" target="_blank">Twitter</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="https://www.linkedin.com/in/neo-subhamoy" target="_blank">Linkedin</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="https://github.com/neosubhamoy" target="_blank">Github</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="https://www.facebook.com/profile.php?id=100076097318726" target="_blank">Facebook</a>
            <a class="text-sm text-accent_three my-1 hover:text-accent_secondary transition transform duration-100" href="https://mastodon.social/@neo_subhamoy" target="_blank">Mastodon</a>
        </div>
    </div>
    <hr class="opacity-20 mt-16 mb-5">
    <div class="copyrightsection w-full flex justify-between items-center mt-7 mb-12">
        <a class="font-cormorant text-4xl font-bold hidden lg:block" href="https://neosubhamoy.xyz">Subhamoy Biswas</a>
        <p class="">&#169; <script>document.write(new Date().getFullYear())</script> - All Rights Reserved<br>Developed with &#10084; in <a class="font-bold" href="">India</a></p>
    </div>
</footer>