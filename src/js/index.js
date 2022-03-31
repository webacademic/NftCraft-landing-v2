import slider from './modules/slider';

document.addEventListener('DOMContentLoaded', () => {
    slider({
        container: '.slider',
        nextArrow: '.slider-next',
        prevArrow: '.slider-prev',
        slide: '.slide',
        wrapper: '.slider-wrapper',
        field: '.slider-inner',
        nav: '.slider-arrows'
    });
})