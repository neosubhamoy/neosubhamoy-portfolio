<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>My Projects - @neo_subhamoy</title>
    <?php require 'assets/_integrate.php';?>
</head>
<body class="font-lexend bg-bg_primary text-accent_secondary">
    <?php require 'assets/_header.php';?>
    <div class="projectsbox w-full px-4 lg:px-[4.5rem]">
        <div class="herosection w-full flex flex-col-reverse justify-center lg:flex-row lg:justify-between items-center mb-3">
            <div class="herotitle w-fit px-2 lg:px-0 lg:mt-16 lg:mb-10 2xl:mt-24 2xl:mb-32">
                <p class="text-2xl my-3 lg:my-2">My Projects  🎉</p>
                <h1 class="text-3xl mt-1 mb-4 lg:mt-2 lg:mb-3 whitespace-nowrap font-bold">Work, <span class="text-accent_primary">Hobby</span> & <span class="text-accent_primary">Open Source</span></h1>
                <h2 class="text-lg mt-3 mb-1 lg:mt-2 lg:mb-1 lg:whitespace-nowrap">I'm just obsessed with <span class="text-accent_primary font-bold">side projects</span> and <span class="text-accent_primary font-bold">open-source</span> stuffs</h2>
                <h3 class="text-lg mt-1 mb-3 lg:mt-1 lg:mb-2 lg:whitespace-nowrap">You can <span class="text-accent_primary font-bold">explore</span> some of <span class="text-accent_primary font-bold">them</span> below</h3>
                <div class="w-full flex justify-start items-center my-7 lg:my-6">
                    <button class="px-5 py-1 font-bold bg-accent_primary text-bg_primary rounded-full hover:shadow-lg hover:shadow-accent_secondary_transparent hover:bg-accent_secondary hover:rounded-lg transition transform duration-500" onclick="location.href='contact.php'"><i class="fa-brands fa-github text-bg_primary"></i> Github</button>
                    <button class="group px-5 py-1 bg-bg_secondary text-accent_secondary_transparent rounded-full font-light hover:bg-bg_third hover:text-accent_secondary mx-7 transition transform duration-500"><i class="fa-solid fa-magnifying-glass text-accent_primary mr-2"></i> Search a project . . . <span class="text-bg_primary bg-accent_secondary_transparent text-xs font-normal px-1 rounded-sm mr-1 ml-3 group-hover:bg-accent_secondary transition transform duration-500">ALT</span>+<span class="text-bg_primary bg-accent_secondary_transparent text-xs font-normal px-1 rounded-sm mx-1 group-hover:bg-accent_secondary transition transform duration-500">K</span></button>
                </div>
            </div>
            <div class="heroimage w-full h-full flex justify-center lg:justify-end items-center">
                <div class="wrapper w-[250px] lg:w-[350px] mb-20 mt-10 lg:mb-0 lg:mt-16 lg:mr-10 z-20">
                    <img src="./assets/images/projects-heroimage.svg" alt="heroimage">
                </div>
                <div class="absolute bg-accent_primary w-[70px] h-[70px] rounded-full shadow-[0px_0px_120px_20px] shadow-accent_primary_transparent lg:blur-2xl mr-0 mb-[2rem] lg:mb-0 lg:mr-[12.5rem] lg:mt-[3.5rem]"></div>
            </div>
        </div>
        <div class="projectssection w-full flex justify-between items-center">
            <div class="lefttimeline">

            </div>
            <div class="rightfeatured">
                <h5 class="text-xl font-bold mb-5">My Profiles</h5>
                <div class="w-full flex flex-col justify-center items-center mb-12">
                    <div class="w-full flex justify-start items-center bg-bg_secondary p-2 rounded-lg my-1">
                        <div class="wrapper w-[50px] rounded-lg overflow-hidden"><img src="./assets/images/neosubhamoy.jpg" alt="neosubhamoy"></div>
                        <div class="w-ful ml-7">
                            <h6 class="text-base font-bold my-1">Subhamoy Biswas</h6>
                            <p class="text-xs text-accent_three my-1">Personal Profile</p>
                        </div>
                    </div>
                    <div class="w-full flex justify-start items-center bg-bg_secondary p-2 rounded-lg my-1">
                        <div class="wrapper w-[50px] rounded-lg overflow-hidden"><img src="./assets/images/techishfellow.jpg" alt="techishfellow"></div>
                        <div class="w-ful ml-7">
                            <h6 class="text-base font-bold my-1">The Techishfellow</h6>
                            <p class="text-xs text-accent_three my-1">Digital Product Publisher</p>
                        </div>
                    </div>
                </div>
                <h5 class="text-xl font-bold mb-5">Featured Projects</h5>
                <div class="w-full flex flex-col justify-center items-center mb-12">
                    <div class="w-full">
                        <img src="./assets/images/fantasywalls.jpg" alt="fantasywalls">
                    </div>
                    <div class="w-full">
                        <img src="./assets/images/prourl.jpg" alt="prourl">
                    </div>
                </div>
                <h5 class="text-xl font-bold mb-5">Currently Working On</h5>
                <div class="w-full flex flex-col justify-center flex-wrap mb-12">
                    <div class="w-fit my-[0.30rem] text-sm font-bold bg-bg_secondary px-3 py-1 rounded-full"><i class="fa-brands fa-react text-base mr-1 text-[#38BDF8]"></i> React Web Development</div>
                    <div class="w-fit my-[0.30rem] text-sm font-bold bg-bg_secondary px-3 py-1 rounded-full"><i class="fa-brands fa-android text-base mr-1 text-[#3FF989]"></i> Android OS & Apps</div>
                    <div class="w-fit my-[0.30rem] text-sm font-bold bg-bg_secondary px-3 py-1 rounded-full"><i class="fa-brands fa-python text-base mr-1 text-[#CD6CFB]"></i> Automation & Python</div>
                    <div class="w-fit my-[0.30rem] text-sm font-bold bg-bg_secondary px-3 py-1 rounded-full"><i class="fa-brands fa-js text-base mr-1 text-[#DCDF3F]"></i> Javascript Library</div>
                    <div class="w-fit my-[0.30rem] text-sm font-bold bg-bg_secondary px-3 py-1 rounded-full"><i class="fa-solid fa-robot text-base mr-1 text-[#EC4B4B]"></i> AI & ML</div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'assets/_footer.php';?>
</body>
</html>