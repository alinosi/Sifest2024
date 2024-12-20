// Wait until document is ready
$(document).ready(function () {
    // Card accordion
    $(".card_header").click(function () {
        // self clicking close
        if ($(this).hasClass("active")) {
            $(this).next(".card_body").slideUp();
            $(this).removeClass("active");
            $(this).children("i").addClass("fa-plus").removeClass("fa-minus");
        } else {
            $(".card .card_body").slideUp();
            $(".card .card_header").removeClass("active");
            $(".card .card_header i")
                .addClass("fa-plus")
                .removeClass("fa-minus");
            $(this).next(".card_body").slideDown();
            $(this).addClass("active");
            $(this).children("i").removeClass("fa-plus").addClass("fa-minus");
        }
    });
});
