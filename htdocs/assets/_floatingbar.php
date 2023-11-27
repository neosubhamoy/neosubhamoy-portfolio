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
<div id="sharewindow" class="sharewindow w-[90vw] md:w-[50vw] mx-auto py-6 fixed inset-x-0 top-[20vh] z-40 justify-between items-center bg-bg_secondary rounded-xl hidden">
    <div class="shareviaqr w-fit h-full flex flex-col items-center py-3 px-7">
        <p class="self-start text-xl">Scan to Share</p>
        <div class="bg-bg_primary p-5 rounded-lg my-3">
            <div class="qrwrapper w-[150px] h-[150px]">
                <img id="pageqrcode" src="https://api.qrserver.com/v1/create-qr-code/?data=https://neosubhamoy.dev&color=38BDF8&bgcolor=0F172A" alt="qrcode">
            </div>
        </div>
        <button class="w-[97%] px-4 py-2 rounded-lg border-[2px] border-accent_primary text-accent_primary my-2"><i class="fa-solid fa-download"></i>&nbsp; Download QR</button>
    </div>
    <div class="extrashareopt w-full h-full flex flex-col py-3 px-7 border-l-[1px] border-[rgba(255,_255,_255,_0.15)]">
        <p class="text-lg"><i class="fa-solid fa-user-group text-accent_primary"></i>&nbsp; Sharing Options</p>
        <div class="urlinputbar w-full flex justify-between items-center py-2 px-3 my-3 bg-bg_primary rounded-full overflow-hidden">
            <input id="pageurlinput" class="w-[85%] bg-bg_primary caret-accent_primary text-accent_four font-[300] outline-none" type="text" value="https://neosubhamoy.dev" readonly>
            <button class="urlcopybtn px-3 border-l-[1px] border-accent_secondary_transparent" title="Copy link"><i class="fa-regular fa-copy"></i></button>
        </div>
        <div class="socialshare w-full grid grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-x-3 gap-y-3 justify-items-center p-4 my-3 bg-bg_primary rounded-lg">
            <botton class="shareitems w-10 h-10 flex justify-center items-center bg-bg_secondary rounded-full cursor-pointer hover:bg-bg_third transition transform duration-500" title="Share on whatsapp" onclick="window.open('https://api.whatsapp.com/send?phone=&text=' + 'Check-out%20this%20awesome%20website:%0A' + encodeURIComponent(window.location.href))"><i class="fa-brands fa-whatsapp text-accent_primary"></i></botton>
            <botton class="shareitems w-10 h-10 flex justify-center items-center bg-bg_secondary rounded-full cursor-pointer hover:bg-bg_third transition transform duration-500" title="Share on telegram" onclick="window.open('https://t.me/share/url?url=' + encodeURIComponent(window.location.href) + '&text=Check-out%20this%20awesome%20website')"><i class="fa-brands fa-telegram text-accent_primary"></i></botton>
            <botton class="shareitems w-10 h-10 flex justify-center items-center bg-bg_secondary rounded-full cursor-pointer hover:bg-bg_third transition transform duration-500" title="Post on facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href))"><i class="fa-brands fa-facebook text-accent_primary"></i></botton>
            <botton class="shareitems w-10 h-10 flex justify-center items-center bg-bg_secondary rounded-full cursor-pointer hover:bg-bg_third transition transform duration-500" title="Tweet on twitter" onclick="window.open('https://twitter.com/intent/tweet?text=' + 'Check-out%20this%20awesome%20website:%0A' + '&url=' + encodeURIComponent(window.location.href))"><i class="fa-brands fa-x-twitter text-accent_primary"></i></botton>
            <botton class="shareitems w-10 h-10 flex justify-center items-center bg-bg_secondary rounded-full cursor-pointer hover:bg-bg_third transition transform duration-500" title="More sharing options" onclick="call_webshare_api()"><i class="fa-solid fa-ellipsis text-accent_primary"></i></botton>
        </div>
        <!-- <p class="text-xs my-3">EMBED THIS PAGE</p> -->
        <div class="embedpagecode w-full bg-bg_primary p-4 rounded-lg">
            <pre class="text-accent_four text-xs whitespace-pre-wrap"><code>&lt;iframe&#13;&#10;src="https://localhost/neosubhamoy/htdocs/projects"&#13;&#10;height="200"&#13;&#10;width="300"&#13;&#10;title="test iframe"&gt;&lt;/iframe&gt;</code></pre>
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
    <button id="closebutton" class="closebutton bg-accent_primary px-[0.85rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300 hidden"><i class="fa-solid fa-xmark text-bg_primary"></i></button>
    <button id="shareclosebutton" class="closebutton bg-accent_primary px-[0.85rem] py-2 rounded-full mx-2 hover:shadow-[0px_0px_30px] hover:shadow-accent_primary_transparent transition transform duration-300 hidden"><i class="fa-solid fa-xmark text-bg_primary"></i></button>
</div>