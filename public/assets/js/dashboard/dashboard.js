// Wait until document is ready
$(document).ready(function () {
    var dashboard = new Swiper(".dashboard_swiper", {
        effect: "coverflow",
        direction: "horizontal",
        grabCursor: true,
        slidesPerView: "auto",
        spaceBetween: 24,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 0,
            slideShadows: true,
        },
    });
});
