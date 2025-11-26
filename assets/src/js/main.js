import General from './_general';
import HeroGallery from './_hero-gallery';
import BlogSlider from './_blog-slider';

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

		// Blog Slider (Splide carousel)
		function initBlogSlider() {
			return new BlogSlider();
		}
		initBlogSlider();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
