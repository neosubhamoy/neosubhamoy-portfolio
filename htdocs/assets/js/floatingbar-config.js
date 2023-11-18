//---controls the bottom floating bar behaviour
const floatingBar = document.getElementById("floating-bar");
const searchBar = document.getElementById("searchbar");
const shareBtn = document.getElementById("sharebutton");
const closeBtn = document.getElementById("closebutton");
const searchTxt = document.getElementById("searchtext");
const searchInput = document.getElementById("searchinput");
const windowWrapper = document.getElementById("floatingwindowwrapper");
const searchWin = document.getElementById("searchwindow");
const searchDef = document.getElementById("defresults");
const searchRes = document.getElementById("searchresults");
let lastScrollTop = 0;

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
function activate_search(searchBar, floatingBar, closeBtn, shareBtn, searchTxt, searchInput, windowWrapper, searchWin) {
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
function close_search(searchBar, floatingBar, closeBtn, shareBtn, searchTxt, searchInput, windowWrapper, searchWin) {
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
}

// when the search icon is clicked
searchBar.addEventListener("click", function () {
    activate_search(searchBar, floatingBar, closeBtn, shareBtn, searchTxt, searchInput, windowWrapper, searchWin);
});

// when ALT + K shortcut key is pressed
document.addEventListener("keydown", function(event) {
    if (event.altKey && event.key === "k") {
        activate_search(searchBar, floatingBar, closeBtn, shareBtn, searchTxt, searchInput, windowWrapper, searchWin);
    }
});

// when close button is clicked
closeBtn.addEventListener("click", function () {
    close_search(searchBar, floatingBar, closeBtn, shareBtn, searchTxt, searchInput, windowWrapper, searchWin);
});

// when ESC key is pressed
document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        close_search(searchBar, floatingBar, closeBtn, shareBtn, searchTxt, searchInput, windowWrapper, searchWin);
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
            console.log(response);
            if(response.results && response.results === "none") {
                inject_no_results(response);
            }
            else {
                const resultTags = [...new Set(response.map(item => item.tag))];
                const result = {};

                resultTags.forEach(tag => {
                result[tag] = response.filter(item => item.tag === tag);
                });

                inject_search_results(result);
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

function fallback_search(searchDef, searchRes) {
    searchDef.classList.remove("hidden");
    searchDef.classList.add("flex");
    searchRes.classList.remove("flex");
    searchRes.classList.add("hidden");
}

function inject_search_results (results) {
    searchRes.innerHTML = `<p class="text-xs text-accent_three mt-3 mb-2 mx-1">SEARCH RESULTS</p>`;

    if(typeof(results.project) !== 'undefined') {
        results.project.forEach(function(result) {
            let projectDiv = document.createElement("div");
            projectDiv.className = "group resultitem w-full flex justify-between items-center my-1 p-1 cursor-pointer hover:bg-bg_third transition transform duration-200 rounded-lg";
            projectDiv.setAttribute("onclick", "location.href='" + result.link + "'");
    
            projectDiv.innerHTML = `
                <span class="flex items-center">
                    <span class="mx-1 px-[0.65rem] py-1 rounded border-[1px] border-accent_secondary_transparent text-accent_primary">${result.name.charAt(0).toUpperCase()}</span>
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

    if(typeof(results.social) !== 'undefined') {
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
}

function inject_no_results(results) {
    searchRes.innerHTML = `<div class="resultitem w-full h-[59vh] flex flex-col justify-center items-center"><p class="text-xl text-accent_three">${results.message}</p</div>`;
}

searchInput.addEventListener('input', function() {
    if (searchInput.value != "") {
        perform_search(searchInput, searchDef, searchRes);
    }
    else {
        fallback_search(searchDef, searchRes);
    }
});