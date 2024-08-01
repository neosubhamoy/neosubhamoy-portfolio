<?php
require 'core/connection.php';
require 'core/host_config.php';
require 'core/query_functions.php';
require 'core/github_api_functions.php';
require 'core/utility_functions.php';
require 'core/write_dataset.php';
write_dataset($conn);

$years = create_project_years_array($conn);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="View my Projects and Contributions in Tech">
    <meta property="og:title" content="<?php echo fetch_page_title($conn, "Projects");?>">
    <meta property="og:description" content="Projects of Subhamoy Biswas (@neo_subhamoy) - Full-Stack Web, Android Developer and UI/UX Designer">
    <meta property="og:image" content="https://<?php echo $domain ?>/assets/images/neosubhamoy.jpg">
    <title><?php echo fetch_page_title($conn, "Projects");?></title>
    <?php require 'assets/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php include 'assets/_preloader.php';?>
    <?php include 'assets/_floatingbar.php';?>
    <?php require 'assets/_header.php';?>
    <div class="projectsbox w-full px-4 lg:px-[4.5rem]">
        <div class="herosection w-full flex flex-col-reverse justify-center lg:flex-row lg:justify-between items-center mb-3">
            <div class="herotitle w-full px-2 lg:px-0 lg:mt-16 lg:mb-10 2xl:mt-24 2xl:mb-32">
                <p class="text-xl lg:text-2xl my-3 lg:my-2" data-aos="fade-right">My Projects  🎉</p>
                <h1 class="text-2xl lg:text-3xl mt-1 mb-4 lg:mt-2 lg:mb-3 whitespace-nowrap font-bold" data-aos="fade-right" data-aos-delay="100">Work, <span class="text-accent_primary">Hobby</span> & <span class="text-accent_primary">Open Source</span></h1>
                <h2 class="text-lg mt-3 mb-1 lg:mt-2 lg:mb-1 lg:whitespace-nowrap" data-aos="fade-right" data-aos-delay="150">I'm just obsessed with <span class="text-accent_primary font-bold">side projects</span> and <span class="text-accent_primary font-bold">open-source</span> stuffs</h2>
                <h3 class="text-lg mt-1 mb-3 lg:mt-1 lg:mb-2 lg:whitespace-nowrap" data-aos="fade-right" data-aos-delay="200">You can <span class="text-accent_primary font-bold">explore</span> some of <span class="text-accent_primary font-bold">them</span> below</h3>
                <div class="w-full flex justify-start items-center my-7 lg:my-6" data-aos="fade-right" data-aos-delay="250">
                    <button class="w-fit px-5 py-1 my-2 mr-2 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="window.open('<?php echo fetch_social_link($conn, 'Github') ?>', '_blank')"><i class="text-bg_primary <?php echo fetch_social_icon($conn, 'Github') ?>"></i> Github</button>
                    <button class="w-fit px-5 py-1 my-2 ml-2 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="window.open('<?php echo fetch_social_link($conn, 'XDA Forums') ?>', '_blank')"><i class="text-bg_primary <?php echo fetch_social_icon($conn, 'XDA Forums') ?>"></i> XDA Forums</button>
                </div>
            </div>
            <div class="heroimage w-full h-full flex justify-center lg:justify-end items-center mt-10 lg:mt-0">
                <div class="wrapper w-[250px] lg:w-[350px] mb-20 mt-10 lg:mb-0 lg:mt-16 lg:mr-10 z-20" data-aos="zoom-in">
                    <img src="./assets/images/projects-heroimage.svg" alt="heroimage">
                </div>
                <div class="absolute bg-accent_primary w-[70px] h-[70px] rounded-full shadow-[0px_0px_120px_20px] shadow-accent_primary_transparent blur-2xl mr-0 mb-[2rem] lg:mb-0 lg:mr-[12.5rem] lg:mt-[3.5rem]" data-aos="zoom-in" data-aos-delay="100"></div>
            </div>
        </div>
        <div class="projectssection w-full flex justify-between items-start mt-32 mb-72 lg:mb-32 px-2 lg:px-0">
            <div class="lefttimeline">
                <h4 class="text-2xl font-bold mb-10">Projects <span class="text-accent_primary">Timeline</span> by Year</h4>
                <div class="timeline">
                <?php

                foreach ($years as $selectedYear) {
                    $projects = fetch_projects_by_year($conn, $selectedYear);

                    if($projects) {

                        echo <<<HTML
                        <div class='year flex items-center'>
                        HTML;

                        //apply different styling for first iteration
                        if($selectedYear === reset($years)) {
                            echo <<<HTML
                            <i class='fa-solid fa-circle fa-beat-fade text-xs text-accent_primary shadow-[0px_0px_15px] shadow-accent_primary rounded-2xl mr-3'></i>
                            HTML;
                        }
                        else {
                            echo <<<HTML
                            <i class='fa-regular fa-circle text-xs text-accent_primary mr-3'></i>
                            HTML;
                        }

                        echo <<<HTML
                        <h6 class='text-xl font-bold'>$selectedYear</h6>
                        </div>
                        <div class='yearbox flex'>
                        HTML;

                        //apply different styling for last iteration
                        if ($selectedYear === end($years)) {
                            echo <<<HTML
                            <div class='timelinebarcont w-2 border-l-bg_primary border-l-[1px] ml-[0.30rem]'></div>
                            HTML;
                        }
                        else {
                            echo <<<HTML
                            <div class='timelinebarcont w-2 border-l-accent_primary border-l-[1px] ml-[0.30rem]'></div>
                            HTML;
                        }

                        echo <<<HTML
                        <div class='yearlyprojects flex flex-col'>
                        HTML;

                        //fetch all projects by year and show it
                        while ($project = $projects -> fetch_assoc()) {
                            echo "
                            <a data-template='project".$project['id']."' class='projectitem text-accent_three my-2 ml-7 last:mb-3' href='".$project['link']."' target='_blank'>".$project['name'].($project['shortdes'] != "" ? ' - '. $project['shortdes'] : '')."</a>
                            <div class='hidden'>
                                <div id='project".$project['id']."'>
                                    <div class='p-1'>
                                        <div class='wrapper rounded-lg overflow-hidden my-1 relative'>
                                            <img class='opacity-[0.70]' src='".$project['thumbnail']."' alt='".strtolower($project['name'])."'>
                                            <span class='absolute top-2 left-2 text-sm bg-bg_third rounded-full px-2'>";
                                            if($project['platform'] === "website") {
                                                echo "<i class='fa-regular fa-window-maximize'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "android") {
                                                echo "<i class='fa-brands fa-android'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "ios" || $project['platform'] === "macos") {
                                                echo "<i class='fa-brands fa-apple'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "windows") {
                                                echo "<i class='fa-brands fa-windows'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "linux") {
                                                echo "<i class='fa-brands fa-linux'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "crossplatform") {
                                                echo "<i class='fa-solid fa-shuffle'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "bot") {
                                                echo "<i class='fa-solid fa-robot'></i> ".$project['platform'];
                                            } else if ($project['platform'] === "extention") {
                                                echo "<i class='fa-solid fa-puzzle-piece'></i> ".$project['platform'];
                                            }
                                            echo"
                                            </span>
                                            ";
                                            if($project['is_open_sourced'] && isset($project['repo'])) {
                                                list($stargazersCount, $forksCount) = fetch_repo_stats($project['repo']);
                                                if(isset($stargazersCount) && isset($forksCount)) {
                                                    echo "
                                                    <div class='absolute bottom-2 left-2 flex items-center'>
                                                        <span class='text-xs flex items-center bg-bg_third rounded px-2 py-1 mr-2'>
                                                            <svg class='mr-2 h-4 w-4 text-accent_primary' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg> ".format_number_in_yt_style($stargazersCount)."
                                                        </span>
                                                        <span class='text-xs flex items-center bg-bg_third rounded px-2 py-1'>
                                                            <svg class='mr-2 h-4 w-4 text-accent_primary' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='18' r='3'/><circle cx='6' cy='6' r='3'/><circle cx='18' cy='6' r='3'/><path d='M18 9v2c0 .6-.4 1-1 1H7c-.6 0-1-.4-1-1V9'/><path d='M12 12v3'/></svg> ".format_number_in_yt_style($forksCount)."
                                                        </span>
                                                    </div>
                                                    ";
                                                }
                                            }
                                            else if($project['user_count']) {
                                                echo "
                                                <span class='absolute bottom-2 left-2 text-xs flex items-center bg-bg_third rounded px-2 py-1'>
                                                    <svg class='mr-2 h-4 w-4 text-accent_primary' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2'/><circle cx='9' cy='7' r='4'/><path d='M22 21v-2a4 4 0 0 0-3-3.87'/><path d='M16 3.13a4 4 0 0 1 0 7.75'/></svg> ".format_number_in_yt_style($project['user_count'])."+ users
                                                </span>
                                                ";
                                            }
                                        echo"
                                        </div>
                                        <div class='flex justify-between items-center mt-3'>
                                            <h6 class='text-lg font-bold'>".$project['name']."</h6>
                                            <span class='projectstatus flex items-center text-xs bg-bg_third rounded-full px-2'>";
                                            if($project['status'] === "active") {
                                                echo "<i class='fa-solid fa-circle h-2 w-2 mr-1' style='color: #1fff4f'></i> ".$project['status'];
                                            }
                                            else if($project['status'] === "archived") {
                                                echo "<i class='fa-solid fa-circle h-2 w-2 mr-1' style='color: #ff9e1f'></i> ".$project['status'];
                                            }
                                            else if ($project['status'] === "inactive") {
                                                echo "<i class='fa-solid fa-circle h-2 w-2 mr-1' style='color: #fc3328'></i> ".$project['status'];
                                            }
                                            echo"
                                            </span>
                                        </div>
                                        <p class='text-xs text-accent_three my-1'>".$project['description']."</p>
                                        <div class='flex items-center flex-wrap overflow-hidden'>";
                                        $stack = explode(",",$project['stack']);
                                        foreach ($stack as $stack_item) {
                                            echo "
                                            <span class='projectstackitem flex items-center text-xs bg-[rgba(255,255,255,0.15)] text-accent_three rounded px-2 mr-2 mt-2'>".$stack_item."</span>
                                            ";
                                        }
                                        echo"
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    
                        echo <<<HTML
                        </div>
                        </div>
                        HTML;
                    }
                }

                ?>
                </div>
            </div>
            <div class="rightfeatured hidden lg:block">
                <h5 class="text-xl font-bold mb-5">My Profiles</h5>
                <div class="w-full flex flex-col justify-center items-center mb-12">
                    <?php

                    $profiles = fetch_all_records($conn, "profile");

                    if($profiles -> num_rows > 0) {
                        //show all profiles
                        while($profile = $profiles -> fetch_assoc()) {
                            echo "
                            <div class='w-full flex justify-start items-center bg-bg_secondary p-2 rounded-lg my-2 cursor-pointer hover:bg-bg_third transition transform duration-500' onclick=\"window.open('".$profile['link']."')\">
                                <div class='wrapper w-[50px] rounded-lg overflow-hidden'><img src='".$profile['photo']."' alt='".str_replace(' ', '', strtolower($profile['name']))."'></div>
                                <div class='w-ful ml-7'>
                                    <h6 class='text-base font-bold my-1'>".$profile['name']."</h6>
                                    <p class='text-xs text-accent_three my-1'>".$profile['description']."</p>
                                </div>
                            </div>
                            ";
                        }
                    }

                    ?>
                </div>
                <h5 class="text-xl font-bold mb-5">Featured Projects</h5>
                <div class="w-full flex flex-col justify-center items-center mb-12">
                    <?php

                    $featured_projects = fetch_featured_projects($conn);

                    if($featured_projects -> num_rows > 0){
                        //show top 2 featured projects for sidebar
                        $counter = 0;
                        while($featured_item = $featured_projects -> fetch_assoc()) {
                            if ($counter < 2) {
                                echo "
                                <div class='group w-[250px] rounded-lg overflow-hidden my-3 relative border-accent_three hover:border-[3px] transition-[border-width] transform duration-100'>
                                    <div class='overlay absolute w-full h-full bg-gradient-to-r from-bg_third z-20 flex-col p-3 hidden group-hover:flex'>
                                        <h6 class='text-xl mb-1'>".$featured_item['name']."</h6>
                                        <p class='text-xs font-[300] mb-4 text-accent_three'>".$featured_item['description']."</p>
                                        <a class='text-sm font-[300] bg-[rgba(255,_255,_255,_0.25)] border-[1px] border-accent_secondary text-accent_secondary px-3 py-[0.15rem] w-fit rounded-full hover:rounded hover:bg-accent_secondary hover:text-bg_primary hover:shadow-lg hover:shadow-accent_secondary_transparent transition transform duration-500' href='".$featured_item['link']."' target='_blank'>View Now</a>
                                    </div>
                                    <img class='opacity-[0.75]' src='".$featured_item['thumbnail']."' alt='".strtolower($featured_item['name'])."'>
                                </div>
                                ";
                            }
                            $counter++;
                            if ($counter >= 2) {
                                break;
                            }
                        }

                    }

                    ?>
                </div>
                <h5 class="text-xl font-bold mb-5">Currently Working On</h5>
                <div class="w-full flex flex-col justify-center flex-wrap mb-12">
                    <?php

                    $working_on = fetch_all_records($conn, "working_on");

                    if($working_on -> num_rows > 0) {
                        //show all currently working on topics
                        while($working_on_topic = $working_on -> fetch_assoc()) {
                            echo"
                            <div class='w-fit my-[0.30rem] text-sm font-bold bg-bg_secondary px-3 py-1 rounded-full'><i class='text-base mr-1 ".$working_on_topic['icon']."' style='color: ".$working_on_topic['icon_color']."'></i> ".$working_on_topic['title']."</div>
                            ";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
    <?php require 'assets/_commonjs.php';?>
</body>
</html>