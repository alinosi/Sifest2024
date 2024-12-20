// Wait until document is ready
$(document).ready(function () {
    // Nav toggle menu
    $("#nav_toggle").click(function () {
        $(this).toggleClass("active");
        $("#header").toggleClass("active");
        $("html").toggleClass("disable_scroll");
    });

    // Clear nav menu collapsed when clicking screen
    document.onclick = function (click) {
        if (click.target.id == "nav_link" || click.target.id == "navbar") {
            $("#nav_toggle").removeClass("active");
            $("#header").removeClass("active");
            $("html").removeClass("disable_scroll");
        }
    };

    // const mediaQuery = window.matchMedia("(min-width: 993px)");

    // function mediaChange(e) {
    //     // Check if the media query is true
    //     if (e.matches) {
    //         $("#nav_toggle").removeClass("active");
    //         $("#header").removeClass("active");
    //         $("html").removeClass("disable_scroll");
    //     }
    // }

    // // Register event listener
    // mediaChange(mediaQuery);
    // // Initial check
    // mediaQuery.addListener(mediaChange);

    // // alert
    // $(".alert_toggle").click(function () {
    //     $(".alert").remove();
    // });

    // setTimeout(() => {
    //     $(".alert").remove();
    // }, 8000);

    // // header disappears when scrolling down, and appears when scrolling up (GSAP)
    // const headerScroll = gsap
    //     .from("#header", {
    //         yPercent: -100,
    //         paused: true,
    //         duration: 0.2,
    //     })
    //     .progress(1);

    // ScrollTrigger.create({
    //     start: "top top",
    //     end: 99999,
    //     onUpdate: (self) => {
    //         self.direction === -1
    //             ? headerScroll.play()
    //             : headerScroll.reverse();

    //         if ($("#header").hasClass("active")) {
    //             headerScroll.play();
    //         }
    //     },
    // });
});

window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

ScrollReveal().reveal(".l", {
    delay: 150,
    duration: 500,
    easing: "ease-in",
    distance: "30px",
    origin: "left",
    reset: "true",
});
ScrollReveal().reveal(".r", {
    delay: 150,
    duration: 500,
    easing: "ease-in",
    distance: "30px",
    origin: "right",
    reset: "true",
});
ScrollReveal().reveal(".t", {
    delay: 150,
    duration: 500,
    easing: "ease-in",
    distance: "20px",
    origin: "top",
    reset: "true",
});
ScrollReveal().reveal(".b", {
    delay: 150,
    duration: 500,
    easing: "ease-in",
    distance: "20px",
    origin: "bottom",
    reset: "true",
});
