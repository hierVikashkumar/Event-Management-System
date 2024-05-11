let menubtn = document.querySelector("#menubtn");
let navbar = document.querySelector("header .navbar");

window.onscroll = () => {
    navbar.classList.remove("active");
    menubtn.classList.remove("fa-times");
};
menubtn.onclick = ()=> {
    menubtn.classList.toggle("fa-times");
    navbar.classList.toggle("active");
};

// Swiper.js
var swiper = new swiper(".ReviewSlider",{
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    spaceBetween: 10,
    breakpoints: {
        0:{
            slidesPerView: 1,
        },
        700:{
            slidesPerView: 2,
        },
        1050:{
            slidesPerView: 3,
        },
    },
    autoplay:{
        delay: 5000,
        disableOnInteraction: false,
    },
});

