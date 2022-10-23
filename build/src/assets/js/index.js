// FIXES
import "./fixes"
import "./spec"
import marquee from 'vanilla-marquee'
import AOS from 'aos';

window.addEventListener("DOMContentLoaded", () => {

	const frontMaquee = document.querySelector('.front-infinity__text')
	if(frontMaquee) {
		new marquee(frontMaquee, {
			duplicated: true,
			startVisible: true,
			direction: 'right',
			speed: 200
		});
	}

	AOS.init();
})