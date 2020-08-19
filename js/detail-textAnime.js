window.addEventListener("load", function() {
    Splitting();

    const title = document.getElementById("title");
    const container = document.getElementsByClassName("text-container")[0];


    title.addEventListener("click", function() {
        console.log("title clicked");
        container.classList.remove("text-container-hidden");
    });

    container.addEventListener("click", function() {
        console.log("text clicked");
        container.classList.add("text-container-hidden");
    });

});
