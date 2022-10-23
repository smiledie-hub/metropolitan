import Swiper, {EffectCreative} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.related-properties__slider', {
        effect: 'creative',
        speed: 400,
        spaceBetween: 0,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        freeMode: true,
        width: 964,
        grabCursor: true,
        creativeEffect: {
            prev: {
                // will set `translateZ(-400px)` on previous slides
                translate: ['calc(-100% - 50px)', 0, 0],
            },
            next: {
                // will set `translateX(100%)` on next slides
                translate: ['calc(100% + 50px)', 0, 0],
            },
            perspective: true
        },
        modules: [EffectCreative],
        on: {

        }
    });
})