import Swiper, {EffectCreative, Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    const palms = new Swiper('.slider-palms', {
        effect: 'creative',
        speed: 400,
        spaceBetween: 70,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        freeMode: true,
        width: 700,
        grabCursor: true,
        navigation: {
            nextEl: document.querySelector('.slider-palms__next'),
            prevEl:  document.querySelector('.slider-palms__prev'),
        },
        creativeEffect: {
            prev: {
                // will set `translateZ(-400px)` on previous slides
                translate: ['-120%', 0, -350],
            },
            next: {
                // will set `translateX(100%)` on next slides
                translate: ['120%', 0, -350],
            },
            perspective: true
        },
        modules: [EffectCreative, Navigation],
        on: {
            sliderMove(s) {
                s.el.classList.add('slider-palms--grabing')
            },
            touchEnd(s) {
                s.el.classList.remove('slider-palms--grabing')
            }
        }
    });
})