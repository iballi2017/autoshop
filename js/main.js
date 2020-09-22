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

    // const specialInputWrapper = document.querySelectorAll(".special_input_wrapper");
    // console.log(specialInputWrapper);

    // specialInputWrapper.forEach(element => {
    //     $(element).on("focus", function() {
    //             $(element).addClass("borderPrimary")
    //             console.log(element.children)
    //             $(element.children).css({ "border": "none" })
    //             $(element.children).focus()
    //             console.log("hi")
    //         })
    //         // $(element).on("focusout", function() {
    //         //     $(element).removeClass("borderPrimary")
    //         //     $(element.children).css({ "border": "none" })
    //         //     $(element.children).focusout()
    //         // })
    // })
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



// Reveal other footer block contents on click of "More details"
const footerBlocksToggler = document.getElementById("footerBlocksToggler");
const footerHiddenBlocks = document.querySelectorAll(".footer_hidden_blocks");

function openblocks() {
    // console.log(footerHiddenBlocks)
    footerHiddenBlocks.forEach(element => {
        // console.log(element)
        if (element.classList.contains("d-none")) {
            element.classList.remove("d-none")
            if (footerBlocksToggler.classList.contains("d-block") && !footerBlocksToggler.classList.contains("d-none")) {
                footerBlocksToggler.classList.remove("d-block")
                footerBlocksToggler.classList.add("d-none")
            }
        }
    })
}