window.addEventListener("load", function() {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,

        //effect: 'cube',
        grabCursor: true,
        parallax: true,
        /*cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },*/

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
});