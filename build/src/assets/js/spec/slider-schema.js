import Swiper, {Navigation, EffectFade} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.slider-schema', {
        effect: 'fade',
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.card-schema-prev',
            prevEl: '.card-schema-next',
        },
        modules: [Navigation, EffectFade],
    });
})