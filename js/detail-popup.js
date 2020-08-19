window.addEventListener("load", function() {

    let slides = Array.from(  document.getElementsByClassName("swiper-slide")  );

    slides.forEach( slide =>
        slide.addEventListener("click", function(){

            const main = document.querySelector("main");
            const img = slide.firstChild.cloneNode(false);

            const container = document.createElement("div");
            container.classList.add("popup-img")
            container.appendChild(img);

            main.appendChild(container);


            container.addEventListener("click", function() {
                main.removeChild(main.lastChild);
            });
        })
    );
});