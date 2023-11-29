//---controls the bottom floating bar behaviour

const floatingBar = document.getElementById("floating-bar");
const searchBar = document.getElementById("searchbar");
const shareBtn = document.getElementById("sharebutton");
const closeBtn = document.getElementById("closebutton");
const shareCloseBtn = document.getElementById("shareclosebutton");
const searchTxt = document.getElementById("searchtext");
const searchInput = document.getElementById("searchinput");
const windowWrapper = document.getElementById("floatingwindowwrapper");
const searchWin = document.getElementById("searchwindow");
const shareWin = document.getElementById("sharewindow");
const searchDef = document.getElementById("defresults");
const searchRes = document.getElementById("searchresults");
const qrCode = document.getElementById("pageqrcode");
const linkInput = document.getElementById("pageurlinput");
const embedCode = document.getElementById("embedcodetag");
const basePath = document.getElementById('phpHostBasePath').dataset.basePath;
let lastScrollTop = 0, isSearchActive = false, isShareActive = false;

window.addEventListener("scroll", function () {
    const st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
    // Scrolling down
    floatingBar.classList.remove("floatingbar-click-slide-down");
    floatingBar.classList.add("floatingbar-slide-down");
    floatingBar.classList.remove("floatingbar-slide-up");
    } else {
    // Scrolling up
    floatingBar.classList.remove("floatingbar-click-slide-down");
    floatingBar.classList.remove("floatingbar-slide-down");
    floatingBar.classList.add("floatingbar-slide-up");
    }

    lastScrollTop = st <= 0 ? 0 : st;
});

// function to open floating search window
function activate_search() {
    isSearchActive = true;
    floatingBar.classList.remove("floatingbar-click-slide-down");
    floatingBar.classList.add("floatingbar-click-slide-up");
    searchBar.classList.remove("searchbar-click-decrease-width");
    searchBar.classList.add("searchbar-click-increase-width");
    closeBtn.classList.remove("hidden");
    shareBtn.classList.add("hidden");
    searchTxt.classList.add("hidden");
    searchInput.classList.remove("hidden");
    searchInput.focus();
    document.body.classList.add("overflow-hidden");
    windowWrapper.classList.remove("hidden");
    windowWrapper.classList.add("flotingbar-window-wrapper-show");
    searchWin.classList.add("floatingsearch-window-show");
}

// function to close floating search window
function close_search() {
    floatingBar.classList.remove("floatingbar-click-slide-up");
    floatingBar.classList.add("floatingbar-click-slide-down");
    searchBar.classList.remove("searchbar-click-increase-width");
    searchBar.classList.add("searchbar-click-decrease-width");
    closeBtn.classList.add("hidden");
    shareBtn.classList.remove("hidden");
    searchTxt.classList.remove("hidden");
    searchInput.classList.add("hidden");
    document.body.classList.remove("overflow-hidden");
    windowWrapper.classList.remove("flotingbar-window-wrapper-show");
    windowWrapper.classList.add("hidden");
    searchWin.classList.remove("floatingsearch-window-show");
    isSearchActive = false;
}

// when the search icon is clicked
searchBar.addEventListener("click", function () {
    if(!isShareActive) {
        activate_search();
    }
    else {
        close_share();
        activate_search();
    }
});

// when ALT + K shortcut key is pressed
document.addEventListener("keydown", function(event) {
    if (event.altKey && event.key === "k") {
        if(!isShareActive) {
            activate_search();
        }
        else {
            close_share();
            activate_search();
        }
    }
});

// when close button is clicked
closeBtn.addEventListener("click", function () {
    close_search();
});

// when ESC key is pressed
document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        if(isSearchActive) {
            close_search();
        }
        else if(isShareActive) {
            close_share();
        }
    }
});

//---controls search window results
function perform_search(searchInput, searchDef, searchRes) {
    searchDef.classList.remove("flex");
    searchDef.classList.add("hidden");
    searchRes.classList.remove("hidden");
    searchRes.classList.add("flex");
    let searchString = searchInput.value;

    $.ajax({
        url: 'core/handle_search.php',
        type: 'POST',
        dataType: 'json',
        data: { keyword: searchString },
        success: function(response) {
            if(response.results && response.results === "none") {
                inject_no_results(response, searchString);
            }
            else {
                const resultTags = [...new Set(response.map(item => item.tag))];
                const result = {};

                resultTags.forEach(tag => {
                result[tag] = response.filter(item => item.tag === tag);
                });

                inject_search_results(result, searchString);
            }
        },
        error: function(error) {
            console.error('error:', error);
        },
        complete: function() {
            console.log("completed");
        }
    });
}

// function to display default search results
function fallback_search(searchDef, searchRes) {
    searchDef.classList.remove("hidden");
    searchDef.classList.add("flex");
    searchRes.classList.remove("flex");
    searchRes.classList.add("hidden");
}

// function to inject proper search results with category based styling
function inject_search_results (results, keyword) {
    searchRes.innerHTML = `<p class="text-sm text-accent_three mt-3 mb-2 mx-1">SEARCH RESULTS for '${keyword.toUpperCase()}'</p>`;

    // search result category: projects
    if(typeof(results.project) !== 'undefined') {
        let projectDivTitle = document.createElement("p");
        projectDivTitle.className = "text-xs text-accent_three mt-3 mb-2 mx-1";
        projectDivTitle.innerHTML = "PROJECTS";
        searchRes.appendChild(projectDivTitle);

        results.project.forEach(function(result) {
            let projectDiv = document.createElement("div");
            projectDiv.className = "group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg";
            projectDiv.setAttribute("onclick", "window.open('" + result.link + "', '_blank')");
    
            projectDiv.innerHTML = `
                <span class="flex items-center">
                    <span class="mx-1 w-[35px] h-[35px] flex justify-center items-center rounded border-[1px] border-accent_secondary_transparent"><p class="text-accent_primary">${result.name.charAt(0).toUpperCase()}</p></span>
                    <span class="flex flex-col">
                        <h6 class="mx-1">${result.name}</h6>
                        <p class="mx-1 text-xs text-accent_three">${result.description.slice(0, 35) + '...'}</p>
                    </span>
                </span>
                <span class="flex items-center mr-1">
                    <span class="px-[1rem] py-[0.05rem] mx-1 text-xs bg-accent_four text-bg_secondary rounded-full group-hover:hidden">${'#' + result.tag}</span>
                    <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
                </span>
            `;
    
            searchRes.appendChild(projectDiv);
        });
    }

    // search result category: socials
    if(typeof(results.social) !== 'undefined') {
        let socialDivTitle = document.createElement("p");
        socialDivTitle.className = "text-xs text-accent_three mt-3 mb-2 mx-1";
        socialDivTitle.innerHTML = "SOCIAL LINKS";
        searchRes.appendChild(socialDivTitle);

        results.social.forEach(function(result) {
            let socialDiv = document.createElement("div");
            socialDiv.className = "group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg";
            socialDiv.setAttribute("onclick", "window.open('" + result.link + "', '_blank')");
    
            socialDiv.innerHTML = `
            <span class="flex items-center">
                <i class="text-xl text-accent_primary m-2 ${result.icon}"></i>
                <p class="mx-1">${result.platform}</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[1rem] py-[0.05rem] mx-1 text-xs bg-accent_four text-bg_secondary rounded-full group-hover:hidden">${'#' + result.tag}</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
            `;
    
            searchRes.appendChild(socialDiv);
        });
    }

    // search result category: site pages
    if(typeof(results.page) !== 'undefined') {
        let pageDivTitle = document.createElement("p");
        pageDivTitle.className = "text-xs text-accent_three mt-3 mb-2 mx-1";
        pageDivTitle.innerHTML = "SITE PAGES";
        searchRes.appendChild(pageDivTitle);

        results.page.forEach(function(result) {
            let pageDiv = document.createElement("div");
            pageDiv.className = "group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg";
            pageDiv.setAttribute("onclick", "location.href='" + basePath + result.link + "'");
    
            pageDiv.innerHTML = `
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/${result.icon}" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">${result.name}</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[1rem] py-[0.05rem] mx-1 text-xs bg-accent_four text-bg_secondary rounded-full group-hover:hidden">${'#' + result.tag}</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
            `;
    
            searchRes.appendChild(pageDiv);
        });
    }

    // search result category: quick actions
    if(typeof(results.action) !== 'undefined') {
        let actionDivTitle = document.createElement("p");
        actionDivTitle.className = "text-xs text-accent_three mt-3 mb-2 mx-1";
        actionDivTitle.innerHTML = "QUICK ACTIONS";
        searchRes.appendChild(actionDivTitle);

        results.action.forEach(function(result) {
            let actionDiv = document.createElement("div");
            actionDiv.className = "group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg";
            actionDiv.setAttribute("onclick", "window.open('" + result.link + "', '_blank')");
    
            actionDiv.innerHTML = `
            <span class="flex items-center">
                <lord-icon class="mx-1" src="https://cdn.lordicon.com/${result.icon}" target=".resultitem" trigger="hover" colors="primary:#38BDF8" style="width:25px"></lord-icon>
                <p class="mx-1">${result.name}</p>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[1rem] py-[0.05rem] mx-1 text-xs bg-accent_four text-bg_secondary rounded-full group-hover:hidden">${'#' + result.tag}</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
            `;
    
            searchRes.appendChild(actionDiv);
        });
    }

    // search result category: my profiles
    if(typeof(results.profile) !== 'undefined') {
        let profileDivTitle = document.createElement("p");
        profileDivTitle.className = "text-xs text-accent_three mt-3 mb-2 mx-1";
        profileDivTitle.innerHTML = "PROFILES";
        searchRes.appendChild(profileDivTitle);

        results.profile.forEach(function(result) {
            let profileDiv = document.createElement("div");
            profileDiv.className = "group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg";
            profileDiv.setAttribute("onclick", "window.open('" + result.link + "', '_blank')");
    
            profileDiv.innerHTML = `
            <span class="flex items-center">
                <span class="wrapper mx-1 w-[35px] rounded-md overflow-hidden">
                    <img src="${result.photo}" alt="${result.name.toLowerCase().replace(/\s/g, '')}">
                </span>
                <span class="flex flex-col">
                    <h6 class="mx-1">${result.name}</h6>
                    <p class="mx-1 text-xs text-accent_three">${result.description}</p>
                </span>
            </span>
            <span class="flex items-center mr-1">
                <span class="px-[1rem] py-[0.05rem] mx-1 text-xs bg-accent_four text-bg_secondary rounded-full group-hover:hidden">${'#' + result.tag}</span>
                <i class="fa-solid fa-chevron-right text-accent_three mx-2 hidden group-hover:block"></i>
            </span>
            `;
    
            searchRes.appendChild(profileDiv);
        });
    }

    //add an extra bottom spacer item for better appearance
    const bottomSpacer = document.createElement("div");
    bottomSpacer.className = "bottomspacer w-full h-[10px]";
    searchRes.appendChild(bottomSpacer);
}

// function to display NO RESULTS FOUND as result
function inject_no_results(results, keyword) {
    searchRes.innerHTML = `
    <p class="text-sm text-accent_three mt-3 mb-2 mx-1">SEARCH RESULTS for '${keyword.toUpperCase()}'</p>
    <div class="resultitem w-full h-[50vh] flex flex-col justify-center items-center">
        <p class="text-xl text-accent_three">${results.message}</p>
    </div>
    `;
}

// when any charecter is inputed into the search bar
searchInput.addEventListener('input', function() {
    if (searchInput.value != "") {
        perform_search(searchInput, searchDef, searchRes);
    }
    else {
        fallback_search(searchDef, searchRes);
    }
});


//---share window config starts here

// function to open the share window
function activate_share() {
    isShareActive = true;
    //create qrcode of the current page link
    qrCode.src = "https://api.qrserver.com/v1/create-qr-code/?data=" + window.location.href + "&color=38BDF8&bgcolor=0F172A";
    //change pageUrlInput value to current page
    linkInput.value = window.location.href;
    //genrate embed code for current page link
    embedCode.innerHTML = '&lt;iframe&#13;&#10;src="' + window.location.href + '"&#13;&#10;height="200"&#13;&#10;width="300"&#13;&#10;title="embed-neosubhamoy-portfolio"&gt;&lt;/iframe&gt;';
    windowWrapper.classList.remove("hidden");
    windowWrapper.classList.add("flotingbar-window-wrapper-show");
    shareBtn.classList.add("hidden");
    shareCloseBtn.classList.remove("hidden");
    shareWin.classList.add("floatingshare-window-show");
    document.body.classList.add("overflow-hidden");
}

// function to close the share window
function close_share() {
    windowWrapper.classList.remove("flotingbar-window-wrapper-show");
    windowWrapper.classList.add("hidden");
    shareCloseBtn.classList.add("hidden");
    shareBtn.classList.remove("hidden");
    shareWin.classList.remove("floatingshare-window-show");
    document.body.classList.remove("overflow-hidden");
    isShareActive = false;
}

// when Share Button is clicked
shareBtn.addEventListener("click", function () {
    if(!isSearchActive) {
        activate_share();
    }
    else {
        close_search();
        activate_share();
    }
});

// when Close Share button is pressed
shareCloseBtn.addEventListener("click", function () {
    close_share();
});

// when ALT + L shortcut key is pressed
document.addEventListener("keydown", function(event) {
    if (event.altKey && event.key === "l") {
        if(!isSearchActive) {
        activate_share();
        }
        else {
            close_search();
            activate_share();
        }
    }
});

// function to share with webShareAPI (Native OS Share)
function call_webshare_api() {
    if(navigator.share) {
        navigator.share({
            title: document.getElementsByTagName("title")[0].innerHTML,
            text: 'Check-out this awesome website:',
            url: document.location.href
        }).then(() => {
            window.alert("Thanks for sharing!");
        }).catch(console.error);
    }
    else {
        if (window.location.protocol !== "https:") {
            window.alert("Sorry, webShareAPI is not accessable as your connection with the server is not encrypted with https protocol");
        }
        else{
            window.alert("Sorry, webShareAPI is not supported by your browser");
        }
    }
}

// function to copy text based content to device clipboard
function copy_to_clipboard(textContent, copyContext) {
    if(copyContext === 'Code Snippet') {
        textContent = textContent.replace(/&lt;/g, '<').replace(/&gt;/g, '>');
    }
    if(navigator.clipboard) {
        navigator.clipboard.writeText(textContent).then(function() {
            window.alert(copyContext + " Copied to Clipboard");
        }, function() {
            window.alert("Failed to Copy the " + copyContext + "!");
        })
    }
    else {
        window.alert("Sorry, webClipboardAPI is not supported by your browser");
    }
}

// function to download image from any url
function download_image(imageURL, imageName, downloadType = "image") {
    if(downloadType === "qr") {
        imageName = imageName.split('/');
        imageName = imageName[imageName.length - 1];
        imageName = "qrcode_" + imageName + "_page.png";
    }

    fetch(imageURL)
    .then(response => response.blob())
    .then(blob => {
      var anchor = document.createElement('a');
      var blobUrl = window.URL.createObjectURL(blob);

      anchor.href = blobUrl;
      anchor.download = imageName;

      document.body.appendChild(anchor);
      anchor.click();
      document.body.removeChild(anchor);
      window.URL.revokeObjectURL(blobUrl);
    })
    .catch(error => console.error('Error downloading image:', error));
}