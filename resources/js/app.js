import './bootstrap';

import Alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const el = document.querySelector('.banner-swiper');

    if (!el) {
        return;
    }

    new Swiper(el, {
        modules: [Navigation, Pagination, Autoplay],
        loop: el.querySelectorAll('.swiper-slide').length > 1,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.banner-swiper-next',
            prevEl: '.banner-swiper-prev',
        },
        pagination: {
            el: '.banner-swiper-pagination',
            clickable: true,
        },
    });
});
