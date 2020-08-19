window.addEventListener("load", function() {
    const hamburgetBtn = document.getElementsByClassName("hamburger-btn")[0];
    hamburgetBtn.addEventListener("click", toggleHamburger);

    const bg = document.getElementsByClassName("bg")[0];
    bg.addEventListener("click", closeHamburger);

    const nav = document.getElementById("menu-nav-menu");
    nav.addEventListener("click", closeHamburger);
});

function toggleHamburger() {
    const header = document.querySelector("header");
    if(header.classList.contains("nav-open")) {
        header.classList.remove("nav-open");
    } else {
        header.classList.add("nav-open");
    }
}

function closeHamburger() {
    const header = document.querySelector("header");
    header.classList.remove("nav-open");
}