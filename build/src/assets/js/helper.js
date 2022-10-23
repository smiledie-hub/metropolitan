export function calcOffsetContainer() {
    let modificator = -40

    const containerWidth = document.querySelector('.container').clientWidth + modificator
    let containerOffset = (window.innerWidth - containerWidth) / 2 || 0

    if(containerOffset < 30) {
        containerOffset = 30
    }

    return containerOffset
}