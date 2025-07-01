window.addEventListener("scroll", function () {
    let navbar = document.querySelector(".nav-bar");
    if (window.scrollY > 150) {
        navbar.classList.add("scrolled", "fixed-top");
    } else {
        navbar.classList.remove("scrolled", "fixed-top");
    }
});
