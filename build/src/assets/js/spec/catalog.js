window.addEventListener("DOMContentLoaded", () => {
    const catalog = document.querySelector('.catalog')
    if(catalog) {

        const btnMapOpen = catalog.querySelector('.catalog-toggle__open')
        const btnMapClose = catalog.querySelector('.catalog-toggle__close')

        btnMapOpen && btnMapOpen.addEventListener('click', (e) => {
            e.preventDefault()
            catalog.classList.add('catalog--open-map')
        })

        btnMapClose && btnMapClose.addEventListener('click', (e) => {
            e.preventDefault()
            catalog.classList.remove('catalog--open-map')
        })
    }
})