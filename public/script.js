const target = document.getElementById("top"),
    button = document.getElementById("backontop");

button.addEventListener("click", function(){
    target.scrollIntoView({
        block: "start",
        behavior: "smooth",
    })
})