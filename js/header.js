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

        document.body.classList.remove("restrict-scroll");
        document.body.style.top = '';
        window.scrollTo(0, parseInt(scrollY || '0') * -1);
    } else {
        header.classList.add("nav-open");

        document.body.classList.add("restrict-scroll");
        document.body.style.top = `-${window.scrollY}px`;
    }
}

function closeHamburger() {
    const header = document.querySelector("header");
    header.classList.remove("nav-open");

    document.body.classList.remove("restrict-scroll");
    const top = document.body.style.top;
    document.body.style.position = '';
    document.body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
}

