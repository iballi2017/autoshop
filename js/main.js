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
    // ........................................................

    // Functions to toggle a "hide" css class
    function removeHide(firstArg, secondArg) {
        if (firstArg) {
            if (secondArg.hasClass("hide")) {
                secondArg.removeClass("hide")
            }
        } else {
            secondArg.addClass("hide");
        }
    }

    function addHide(firstArg, secondArg) {
        if (firstArg) {
            if (!secondArg.hasClass("hide")) {
                secondArg.addClass("hide");
            }
        } else {
            secondArg.removeClass("hide")
        }
    }
    // ........................................................
    // Checkout page bank account toggle
    var bankAccountRadioButton = $("#bank_transfer");
    var thirdPartyRadioButton = $("#third_party");
    var checkedThirdPartyRadioButton = $("#third_party:checked");
    var checkedBankAccountRadioButton = $("#bank_transfer:checked");
    var sellerBankDetails = $("#seller_account_details")
    bankAccountRadioButton.on("click", function() {
        removeHide(checkedBankAccountRadioButton, sellerBankDetails)
    })
    thirdPartyRadioButton.on("click", function() {
        addHide(checkedThirdPartyRadioButton, sellerBankDetails)
    })

    // payment page toggle payment method
    var payment_method = $("#payment_method");
    var payment_method_true = $("#payment_method_true");
    var checked_payment_method_true = $("#payment_method_true:checked");
    var payment_method_false = $("#payment_method_false");
    var checked_payment_method_false = $("#payment_method_false:checked");

    payment_method_true.on('click', function() {
        removeHide(checked_payment_method_true, payment_method)
    })
    payment_method_false.on('click', function() {
        addHide(checked_payment_method_false, payment_method)
    })

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


// back history

function goBack() {
    window.history.back();
}