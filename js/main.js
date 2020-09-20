$(document).ready(function() {


    // feedbacks slider
    $(".reviews_slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 10000,
        smartSpeed: 1000,
        fluidSpeed: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
})

// toggle nav dropdon on hover event
var dropdown = document.getElementById("customDropdown");
dropdown.addEventListener("mouseenter", function() {
    // console.log(this.lastElementChild)
    if (!this.lastElementChild.classList.contains("show")) {
        this.lastElementChild.classList.add("show")
    }
})
dropdown.addEventListener("mouseleave", function() {
    // console.log(this.lastElementChild)
    if (this.lastElementChild.classList.contains("show")) {
        this.lastElementChild.classList.remove("show")
    }
})