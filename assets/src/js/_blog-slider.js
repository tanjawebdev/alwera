import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

class BlogSlider {
    constructor() {
        this.init();
    }

    init() {
        const blogSliders = document.querySelectorAll('.blog-slider');

        blogSliders.forEach((slider) => {
            new Splide(slider, {
                type: 'loop',
                perPage: 3.5,
                perMove: 1,
                arrows: true,
                pagination: false,
                breakpoints: {
                    1024: {
                        perPage: 2,
                    },
                    768: {
                        perPage: 1,
                        gap: '1rem',
                    },
                },
            }).mount();
        });
    }
}

export default BlogSlider;
