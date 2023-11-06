<div class="floatingwindowwrapper fixed top-0 left-0 w-screen h-screen z-30 bg-[rgba(0,_0,_0,_0.4)] backdrop-filter backdrop-blur-lg"></div>
<div id="floating-bar" class="fixed inset-x-0 bottom-[7vh] z-[50] flex justify-center items-center">
    <div id="searchbar" class="searchbar bg-bg_secondary rounded-full p-[0.30rem] flex items-center cursor-pointer mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_extratransparent transition transform duration-300">
        <button class="bg-accent_primary px-3 py-2 rounded-full"><i class="fa-solid fa-magnifying-glass text-bg_primary"></i></button>
        <p id="searchtext" class="ml-3 mr-4 text-accent_three">Search</p>
        <input id="searchinput" class="w-full mx-2 bg-bg_secondary caret-accent_primary outline-none hidden" type="text" placeholder="Type to Search Something . . ." name="search-input">
    </div>
    <button id="sharebutton" class="sharebutton bg-accent_primary px-[0.80rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300"><i class="fa-solid fa-share-nodes text-bg_primary"></i></button>
    <button id="closebutton" class="closebutton bg-accent_primary px-[0.80rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300 hidden"><i class="fa-solid fa-xmark text-bg_primary"></i></button>
</div>