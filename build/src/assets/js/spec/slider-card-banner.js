import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    const slider = new Swiper('.card-banner__swiper', {
        speed: 400,
        spaceBetween: 0,
        allowTouchMove: false,
        slidesPerView: 1,
        navigation: {
            nextEl: document.querySelector('.card-banner__next'),
            prevEl:  document.querySelector('.card-banner__prev'),
        },
        modules: [Navigation],
        on: {
            sliderMove(s) {

            },
            touchEnd(s) {

            }
        }
    });

    const followCursor = () => { // объявляем функцию followCursor
        const cursor = document.querySelector('.card-page__cursor')
        const container = document.querySelector('.card-banner')

        if (cursor && container) {
            container.addEventListener('click', e => {
                cursor.classList.add('card-page__cursor--click')

                setTimeout(() => {
                    cursor.classList.remove('card-page__cursor--click')
                }, 300)
            })
            container.addEventListener('mousemove', e => {
                const target = e.target
                if (!target) return

                if (target.closest('a')) {
                    cursor.classList.add('card-page__cursor--link')
                } else { // иначе
                    cursor.classList.remove('card-page__cursor--link')
                }

                if (target.closest('.card-banner__next')) {
                    cursor.classList.add('card-page__cursor--next')
                    cursor.classList.remove('card-page__cursor--prev')
                } else if (target.closest('.card-banner__prev')) {
                    cursor.classList.add('card-page__cursor--prev')
                    cursor.classList.remove('card-page__cursor--next')
                } else {
                    cursor.classList.remove('card-page__cursor--prev')
                    cursor.classList.remove('card-page__cursor--next')
                }

                setTimeout(() => {
                    cursor.style.left = e.pageX + 'px'
                    cursor.style.top = e.pageY + 'px'
                }, 100)
            })
        }
    }

    followCursor() // вызываем функцию followCursor
})