let button = document.querySelector(".burger");

button.addEventListener("click", function(evt) {
    console.log("button click", evt);

    document.querySelector(".burguer-menu").classList.toggle("show");
});


document.addEventListener("click", function(event) {
    console.log("document click", event);

    var isClickInsideButton = button.contains(event.target);

    if (!isClickInsideButton) {
        document.querySelector(".burguer-menu").classList.remove("show");
    }
});
