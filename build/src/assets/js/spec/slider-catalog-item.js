import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.catalog-item__slider', {
        speed: 400,
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: '.catalog-item__next',
            prevEl: '.catalog-item__prev',
        },
        modules: [Navigation],
    });
})