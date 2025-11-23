import General from './_general';
import HeroGallery from './_hero-gallery';

const App = {
	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			return new General();
		}
		initGeneral();

		// Hero Gallery (Splide carousel)
		function initHeroGallery() {
			return new HeroGallery();
		}
		initHeroGallery();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
