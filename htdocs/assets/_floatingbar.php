<div id="floatingwindowwrapper" class="floatingwindowwrapper fixed top-0 left-0 w-screen h-screen z-30 bg-[rgba(0,_0,_0,_0.4)] hidden"></div>
<div id="searchwindow" class="searchwindow w-[90vw] md:w-[44vw] mx-auto h-[60vh] fixed inset-x-0 top-[30vh] z-40 flex-col items-center bg-bg_secondary rounded-xl overflow-hidden hidden">
    <div class="defresultpages w-full flex flex-col justify-start px-2 mt-1">
        <p class="text-xs text-accent_three mt-3 mb-2 mx-1">PAGE SHOTCUTS</p>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/cnpvyndp.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Home</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">Q</span>
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">H</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/utpmnzxz.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Projects</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">Q</span>
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">P</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/lyrrgrsl.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Blog</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">Q</span>
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">B</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/kthelypq.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Contact</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">Q</span>
                <span class="px-[0.40rem] py-[0.10rem] mx-1 bg-accent_four text-bg_secondary rounded group-hover:hidden">C</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
    </div>
</div>
<div id="floating-bar" class="fixed inset-x-0 bottom-[7vh] z-[50] flex justify-center items-center">
    <div id="searchbar" class="searchbar bg-bg_secondary rounded-full p-[0.30rem] flex items-center cursor-pointer mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_extratransparent transition transform duration-300">
        <button class="bg-accent_primary px-3 py-2 rounded-full"><i class="fa-solid fa-magnifying-glass text-bg_primary"></i></button>
        <p id="searchtext" class="ml-3 mr-4 text-accent_three">Search</p>
        <input id="searchinput" class="w-full mx-2 bg-bg_secondary caret-accent_primary outline-none hidden" type="text" placeholder="Type to Search Something . . ." name="search-input">
    </div>
    <button id="sharebutton" class="sharebutton bg-accent_primary px-[0.80rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300"><i class="fa-solid fa-share-nodes text-bg_primary"></i></button>
    <button id="closebutton" class="closebutton bg-accent_primary px-[0.80rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300 hidden"><i class="fa-solid fa-xmark text-bg_primary"></i></button>
</div>