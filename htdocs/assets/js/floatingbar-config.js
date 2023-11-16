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

searchInput.addEventListener('input', function() {
    if (searchInput.value != "") {
        perform_search(searchInput, searchDef, searchRes);
    }
    else {
        fallback_search(searchDef, searchRes);
    }
});