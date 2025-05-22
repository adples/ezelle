/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const mediaQuery = window.matchMedia('(min-width: 768px)');
let swapTarget = document.getElementsByClassName('bg-resize');
mediaQuery.addEventListener('change', handleMediaQuery);

function handleMediaQuery(e) {
	if (swapTarget) {
		if (e.matches) {
			for (let element of swapTarget) {
				let x = element.getAttribute('data-img-full');
				let y = 'url(' + x + ')';
				element.style.backgroundImage = y;
			}
		} else {
			for (let element of swapTarget) {
				let x = element.getAttribute('data-img-md');
				let y = 'url(' + x + ')';
				element.style.backgroundImage = y;
			}
		}
	}
}

handleMediaQuery(mediaQuery);
