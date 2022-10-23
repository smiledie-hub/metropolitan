// 100 vh fixes
import {calcOffsetContainer} from "../helper";

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', vh + 'px');
document.documentElement.style.setProperty('--cp', calcOffsetContainer() + 'px');

window.addEventListener('resize', () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');
    document.documentElement.style.setProperty('--cp', calcOffsetContainer() + 'px');
});