//---controls the bottom floating bar behaviour
let lastScrollTop = 0;

window.addEventListener("scroll", function () {
    const st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
    // Scrolling down
    document.getElementById("floating-bar").classList.add("floatingbar-slide-down");
    document.getElementById("floating-bar").classList.remove("floatingbar-slide-up");
    } else {
    // Scrolling up
    document.getElementById("floating-bar").classList.remove("floatingbar-slide-down");
    document.getElementById("floating-bar").classList.add("floatingbar-slide-up");
    }

    lastScrollTop = st <= 0 ? 0 : st;
});