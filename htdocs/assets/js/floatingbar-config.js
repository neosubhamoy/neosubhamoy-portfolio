//---controls the bottom floating bar behaviour
const floatingBar = document.getElementById("floating-bar");
const searchBar = document.getElementById("searchbar");
const shareBtn = document.getElementById("sharebutton");
const closeBtn = document.getElementById("closebutton");
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
function activate_search(searchBar, floatingBar, closeBtn, shareBtn) {
    floatingBar.classList.remove("floatingbar-click-slide-down");
    floatingBar.classList.add("floatingbar-click-slide-up");
    searchBar.classList.remove("searchbar-click-decrease-width");
    searchBar.classList.add("searchbar-click-increase-width");
    closeBtn.classList.remove("hidden");
    shareBtn.classList.add("hidden");
}

// function to close floating search window
function close_search(searchBar, floatingBar, closeBtn, shareBtn) {
    floatingBar.classList.remove("floatingbar-click-slide-up");
    floatingBar.classList.add("floatingbar-click-slide-down");
    searchBar.classList.remove("searchbar-click-increase-width");
    searchBar.classList.add("searchbar-click-decrease-width");
    closeBtn.classList.add("hidden");
    shareBtn.classList.remove("hidden");
}

// when the search icon is clicked
searchBar.addEventListener("click", function () {
    activate_search(searchBar, floatingBar, closeBtn, shareBtn);
});

// when ALT + K shortcut key is pressed
document.addEventListener("keydown", function(event) {
    if (event.altKey && event.key === "k") {
        activate_search(searchBar, floatingBar, closeBtn, shareBtn);
    }
});

// when close button is clicked
closeBtn.addEventListener("click", function () {
    close_search(searchBar, floatingBar, closeBtn, shareBtn);
});

// when ESC key is pressed
document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        close_search(searchBar, floatingBar, closeBtn, shareBtn);
    }
});

