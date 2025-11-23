import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

class HeroGallery {
	constructor() {
		this.init();
	}

	init() {
		const heroGalleries = document.querySelectorAll('.hero-gallery');
		
		heroGalleries.forEach((gallery) => {
			new Splide(gallery, {
				type: 'fade',
                rewind: true,
				perPage: 1,
				arrows: false,
				pagination: true,
				autoplay: true,
                interval: 3000,
			}).mount();
		});
	}
}

export default HeroGallery;

