import Swiper, {Navigation} from "swiper";
import {calcOffsetContainer} from "../helper";

window.addEventListener("DOMContentLoaded", () => {
    const progress = document.querySelector('.slider-projects__progress')
    const sliderEl = document.querySelector('.slider-projects__el')

    if(progress) {
        const progressBar = progress.querySelector('.slider-projects__progress-bar')
        function setOffsetSwiper(s) {
            let beforeOffset = calcOffsetContainer() - 50;
            let afterOffset = calcOffsetContainer() + 50;

            if(beforeOffset < 50) {
                beforeOffset = calcOffsetContainer()
            }

            if(afterOffset < 50) {
                afterOffset = calcOffsetContainer()
            }

            s.params.slidesOffsetBefore = beforeOffset;
            s.params.slidesOffsetAfter = afterOffset;
        }

        const sliderProjects = new Swiper(sliderEl, {
            speed: 400,
            width: (sliderEl.clientWidth + 100) / 2,
            spaceBetween: 50,
            grabCursor: true,
            slidesOffsetBefore: calcOffsetContainer() - 50,
            slidesOffsetAfter: calcOffsetContainer() + 50,
            navigation: {
                nextEl: '.slider-projects__next',
                prevEl: '.slider-projects__prev',
            },
            modules: [Navigation],
            on: {
                resize(s) {
                    const percent = (progress.clientWidth / s.slides.length) * s.activeIndex

                    progressBar.style.width = progress.clientWidth / s.slides.length + "px"
                    progressBar.style.left = percent + "px"

                    setOffsetSwiper(s)
                    s.params.width = (sliderEl.clientWidth + 100) / 2;
                },
                init(s) {
                    progressBar.style.width = progress.clientWidth / s.slides.length + "px"
                    setOffsetSwiper(s)
                },
                slideChange(s) {
                    const percent = (progress.clientWidth / s.slides.length) * s.activeIndex
                    progressBar.style.left = percent + "px"
                },
            }
        });
    }
})