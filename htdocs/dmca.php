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
    <meta name="description" content="DMCA Notice for Subhamoy Biswas Portfolio">
    <meta property="og:title" content="DMCA Notice - @neo_subhamoy">
    <meta property="og:description" content="DMCA Notice for Subhamoy Biswas Portfolio">
    <meta property="og:image" content="https://<?php echo $domain ?>/assets/images/neosubhamoy.jpg">
    <title>DMCA Notice - @neo_subhamoy</title>
    <?php require 'assets/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php include 'assets/_preloader.php';?>
    <?php include 'assets/_floatingbar.php';?>
    <?php require 'assets/_header.php';?>
    <div class="dmcabox w-full px-4 lg:px-[4.5rem]">
        <div class="mainsection w-full mt-10 mb-28">
            <div class="dmcaheader w-full flex justify-between items-center">
                <span class="flex items-center">
                    <button class="w-[40px] h-[40px] bg-bg_secondary hover:bg-bg_third rounded-full flex justify-center items-center mr-3" onclick="location.href='<?php echo $basePath ?>'"><i class="fa-solid fa-chevron-left"></i></button>
                    <h1 class="text-4xl">DMCA Notice</h1>
                </span>
                <span class="px-4 py-1 bg-accent_primary_extratransparent rounded-full text-accent_primary hidden lg:block">#legal</span>
            </div>
            <p class="text-lg text-accent_three mt-12">Last Updated On: 11th of December 2023</p>
            <div class="dmcacontent w-full bg-bg_secondary rounded-xl px-5 py-7 mt-7">
                <div class="dmcacont1 text-accent_three pb-5 mb-10 border-b-[1px] border-b-accent_secondary_transparent">
                    <p>If you require any more information or have any questions regarding this site&#39;s disclaimer, please feel free to contact us by email at <a href="mailto:hey@<?php echo $domain ?>">hey@<?php echo $domain ?></a>.</p>
                </div>
                <div class="dmcacont2 text-accent_three">
                    <h2 class="text-2xl text-accent_secondary my-3">Disclaimers for Subhamoy Biswas Portfolio</h2>
    
                    <p>All the information on this website - https://<?php echo $domain ?> - is published in good faith and for general information purpose only. Subhamoy Biswas Portfolio does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (Subhamoy Biswas Portfolio), is strictly at your own risk. Subhamoy Biswas Portfolio will not be liable for any losses and/or damages in connection with the use of our website.</p>
    
                    <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone &#39;bad&#39;.</p>
    
                    <p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their &quot;Terms of Service&quot; before engaging in any business or uploading any information.</p>
    
                    <h2 class="text-2xl text-accent_secondary my-3">Consent</h2>
    
                    <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
    
                    <h2 class="text-2xl text-accent_secondary my-3">Update</h2>
    
                    <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <script type="text/javascript" src="assets/js/preloader-config.js"></script>
    <script type="text/javascript" src="assets/js/floatingbar-config.js"></script>
    <script type="text/javascript" src="assets/js/keybinding-config.js"></script>
    <script type="text/javascript" src="assets/js/tippy-config.js"></script>
</body>
</html>