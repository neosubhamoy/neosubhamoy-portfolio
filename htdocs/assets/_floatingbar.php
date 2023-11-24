<div id="floatingwindowwrapper" class="floatingwindowwrapper fixed top-0 left-0 w-screen h-screen z-30 bg-[rgba(0,_0,_0,_0.4)] hidden"></div>
<div id="phpHostBasePath" class="hidden" data-base-path="<?php echo htmlspecialchars($basePath);?>"></div>
<div id="searchwindow" class="searchwindow w-[90vw] md:w-[44vw] mx-auto h-[45vh] md:h-[60vh] fixed inset-x-0 top-[30vh] z-40 flex-col items-center bg-bg_secondary rounded-xl overflow-y-scroll no-scrollbar hidden">
    <div id="defresults" class="defresults w-full flex flex-col justify-start px-2 mt-1">
        <p class="text-xs text-accent_three mt-3 mb-2 mx-1">PAGE NAVIGATION</p>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='<?php echo $basePath ?>'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/cnpvyndp.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Home</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">N</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">H</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='<?php echo $basePath . '/projects' ?>'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/utpmnzxz.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Projects</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">N</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">P</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='<?php echo $basePath . '/blog' ?>'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/lyrrgrsl.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Blog</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">N</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">B</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='<?php echo $basePath . '/contact' ?>'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/kthelypq.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Contact</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">N</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">C</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <p class="text-xs text-accent_three mt-3 mb-2 mx-1">QUICK ACTIONS</p>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='mailto:hey@neosubhamoy.dev'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/xtnsvhie.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Send Email</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">Q</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">E</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='#'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/fdxqrdfe.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Chat Online</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">Q</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">M</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='#'">
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/lzgmgrnn.json" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">Source Code</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">Q</p></span>
                <span class="w-[27px] h-[27px] flex justify-center items-center mx-1 bg-accent_four rounded group-hover:hidden"><p class="text-bg_secondary">S</p></span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
        <div class="bottomspacer w-full h-[10px]"></div>
    </div>
    <div id="searchresults" class="searchresults w-full flex-col justify-start px-2 mt-1 hidden">
        <p class="text-xs text-accent_three mt-3 mb-2 mx-1">SEARCH RESULTS</p>
        <div class="group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg" onclick="location.href='#'">
            <span class="flex items-center">
                <span class="mx-1 px-[0.65rem] py-1 rounded border-[1px] border-accent_secondary_transparent">TITLE LETTER</span>
                <span class="flex flex-col">
                    <h6 class="mx-1">TITLE</h6>
                    <p class="mx-1 text-xs text-accent_three">DESCRIPTION</p>
                </span>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[1rem] py-[0.05rem] mx-1 text-xs bg-accent_four text-bg_secondary rounded-full group-hover:hidden">#TAG</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
        </div>
    </div>
</div>
<div id="sharewindow" class="sharewindow w-[90vw] md:w-[50vw] mx-auto h-[45vh] md:h-[60vh] fixed inset-x-0 top-[20vh] z-40 flex-col items-center bg-bg_secondary rounded-xl hidden">

</div>
<div id="floating-bar" class="fixed inset-x-0 bottom-[7vh] z-[50] flex justify-center items-center">
    <div id="searchbar" class="searchbar bg-bg_secondary rounded-full p-[0.30rem] flex items-center cursor-pointer mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_extratransparent transition transform duration-300">
        <button class="bg-accent_primary px-3 py-2 rounded-full"><i class="fa-solid fa-magnifying-glass text-bg_primary"></i></button>
        <p id="searchtext" class="ml-3 mr-4 text-accent_three">Search</p>
        <input id="searchinput" class="w-full mx-2 bg-bg_secondary caret-accent_primary outline-none hidden" type="text" placeholder="Type to Search Something . . ." name="search-input">
    </div>
    <button id="sharebutton" class="sharebutton bg-accent_primary px-[0.80rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300"><i class="fa-solid fa-share-nodes text-bg_primary"></i></button>
    <button id="closebutton" class="closebutton bg-accent_primary px-[0.85rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300 hidden"><i class="fa-solid fa-xmark text-bg_primary"></i></button>
    <button id="shareclosebutton" class="closebutton bg-accent_primary px-[0.85rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300 hidden"><i class="fa-solid fa-xmark text-bg_primary"></i></button>
</div>