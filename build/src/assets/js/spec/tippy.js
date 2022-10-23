import tippy, {followCursor} from 'tippy.js';

window.addEventListener("DOMContentLoaded", () => {
    const cardSocialscardSocials = document.querySelectorAll('.tippy')

    cardSocialscardSocials.forEach(item => {
        const text = item.dataset.text

        tippy(item, {
            content: text,
            arrow: false,
            theme: 'light',
            followCursor: true,
            plugins: [followCursor],
        });
    })
})