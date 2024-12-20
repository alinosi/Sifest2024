// GET ELEMENTS FROM DOM
const slider = document.querySelector(".circular-slider");
const image = document.querySelector(".slider .img");
const indicator = document.querySelector(".indicator");
const menuItems = document.querySelectorAll(".menu span"); // Changed to querySelectorAll for multiple items
const descriptions = document.querySelectorAll(".text"); // Use querySelectorAll for descriptions

// ROTATION VALUE FOR EACH MENU ITEM
const rotationValues = [-58, -32, 0, 32, 58];

// BACKGROUND COLORS
const colors = [
    "linear-gradient(144deg, rgba(19,7,46,0) 0%, rgba(63,33,130,0) 100%)",
    "linear-gradient(144deg, rgba(19,7,46,0) 0%, rgba(63,33,130,0) 100%)",
    "linear-gradient(144deg, rgba(19,7,46,0) 0%, rgba(63,33,130,0) 100%)",
    "linear-gradient(144deg, rgba(19,7,46,0) 0%, rgba(63,33,130,0) 100%)",
    "linear-gradient(144deg, rgba(19,7,46,0) 0%, rgba(63,33,130,0) 100%)",
];

// IMAGE NAMES TO ADD FOR EACH MENU ITEM
const images = ["img1", "img2", "img3", "img4", "img5"];

// CURRENT MENU ITEM INDEX
let itemIndex = 2;

// FUNCTION FOR ROTATING THE SLIDER
function rotate(rotationValue) {
    image.style.transform = `rotate(${rotationValue}deg)`; // Use backticks for template literals
    indicator.style.transform = `translate(-50%, -50%) rotate(${rotationValue}deg)`; // Use backticks
}

// LOOP THROUGH EACH MENU ITEM
menuItems.forEach((menuItem, i) => {
    menuItem.addEventListener("click", () => {
        image.style.backgroundImage = `url(/assets/img/sifest2024/compe/${images[i]}.png)`; // Use the correct index
        slider.style.background = colors[i]; // Use the correct index

        if (i > itemIndex) {
            rotate(rotationValues[itemIndex] - 10);
        } else if (i < itemIndex) {
            rotate(rotationValues[itemIndex] + 10);
        } else {
            return; // No need for an empty string
        }

        setTimeout(() => {
            rotate(rotationValues[i]);
        }, 300);

        descriptions.forEach((text, index) => {
            text.style.display = index === i ? "block" : "none"; // Show current description, hide others
        });

        itemIndex = i;
    });
});

// Wait until document is ready
$(document).ready(function () {
    var contentnavsSwiper = new Swiper(".content_navs_swiper", {
        effect: "coverflow",
        direction: "horizontal",
        centeredSlides: true,
        allowTouchMove: true,
        slidesPerView: "auto",
        slideToClickedSlide: true,
        initialSlide: "2",
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
    });

    const competition = [
        {
            title: "Essay Competition",
            description:
                "Lomba esai merupakan sebuah ajang kompetisi di mana peserta diharapkan untuk menulis esai dengan mengangkat tema atau topik tertentu. Melalui esai ini, peserta diharapkan dapat mengidentifikasi tantangan dan peluang yang muncul dari integrasi kreativitas dan teknologi dalam konteks pendidikan.",
            img: "assets/img/icon/essay.png",
            button: "/competition/essaycompe",
            regis: "/registration/essaycompe",
        },
        {
            title: "Poster Design",
            description:
                " Lomba desain poster adalah kompetisi di mana peserta berlomba untuk menciptakan poster kreatif yang mengkomunikasikan pesan atau tema tertentu dalam sebuah gambar. Para peserta berusaha memadukan desain visual yang menarik dengan pesan yang kuat untuk memenangkan perlombaan. Lomba ini mendorong kreativitas dalam seni grafis dan komunikasi visual.",
            img: "assets/img/icon/poster.png",
            button: "/competition/designposter",
            regis: "/registration/designposter",
        },
        {
            title: "UI/UX Design",
            description:
                "Lomba UI/UX design adalah ajang kompetisi di mana peserta bersaing dalam merancang antarmuka pengguna (UI) dan pengalaman pengguna (UX) yang optimal untuk aplikasi atau produk digital. Peserta harus menggabungkan desain estetis yang menarik dengan fungsionalitas yang intuitif untuk memberikan pengalaman pengguna yang luar biasa. Lomba ini mendorong inovasi dalam desain digital dan penekanan pada kepuasan pengguna.",
            img: "assets/img/icon/uiux_design.png",
            button: "/competition/uiuxdesign",
            regis: "/registration/uiuxdesign",
        },
        {
            title: "Educational Video",
            description:
                "Lomba video edukasi adalah kompetisi di mana peserta berlomba untuk membuat video pendidikan yang informatif dan mendidik. Peserta harus menciptakan konten yang memikat, mudah dipahami, dan yang menggabungkan konsep inovatif dan teknologi yang relevan, untuk memberikan dampak positif dalam sektor pendidikan.. Lomba ini mendorong kreativitas dalam pengembangan materi edukasi yang menarik dan efektif melalui media visual.",
            img: "assets/img/icon/educational_video.png",
            button: "/competition/eduvideo",
            regis: "/registration/eduvideo",
        },
        {
            title: "Valorant",
            description:
                "Valorant Competition merupakan kompetisi dalam bidang E-sport dimana Valorant sebagai game FPS 5v5 dikompetisikan untuk mendapatkan tim yang mampu mengalahkan tim lainnya. Tim yang mencapai poin kemenangan terlebih dahulu menjadi pemenangnya",
            img: "assets/img/icon/valorant.png",
            button: "/competition/valorant",
            regis: "/registration/valorant",
        },
        {
            title: "Mobile Legends",
            description:
                "Mobile Legends Competition merupakan kompetisi dalam bidang E-sport dimana Mobile Legends sebagai game multiplayer online battle arena dikompetisikan, tim yang dapat menghacurkan base musuh lainnya menjadi pemenangnya.",
            img: "assets/img/icon/mobile_legends.png",
            button: "/competition/mobilelegends",
            regis: "/registration/mobilelegends",
        },
    ];

    let title_compe = document.querySelector("#title_compe");
    let desc_compe = document.querySelector("#desc_compe");
    let img_compe = document.querySelector("#img_compe");
    let btn_compe = document.querySelector("#btn_compe");
    let btn_regis = document.querySelector("#btn_regis");
    contentnavsSwiper.on("activeIndexChange", () => {
        const data = competition[contentnavsSwiper.activeIndex];
        title_compe.textContent = data.title;
        desc_compe.textContent = data.description;
        img_compe.setAttribute("src", data.img);
        btn_compe.setAttribute("href", data.button);
        btn_regis.setAttribute("href", data.regis);
    });

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
