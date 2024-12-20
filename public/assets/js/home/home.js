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

    // coverflow Swiper Design
    var coverflowSwiper = new Swiper(".coverflow_swiper", {
        effect: "coverflow",
        direction: "horizontal",
        centeredSlides: true,
        allowTouchMove: true,
        slidesPerView: "auto",
        slideToClickedSlide: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 10,
            depth: 100,
            modifier: 2,
            slideShadows: true,
        },
        loop: true,
        autoplay: {
            delay: 8000,
            disableOnInteraction: true,
        },
    });

    //tab nav
    $(".event_navs button").click(function () {
        const id = $(this).data("id");
        if (!$(this).hasClass("active")) {
            $(".event_navs button").removeClass("active");
            // $(".event_navs button").removeClass("box_event_tab");
            $(this).addClass("active");
            // $(this).addClass("box_event_tab");

            $(".event_tab").hide();
            $(`[data-content=${id}]`).fadeIn();
        }
    });
});
