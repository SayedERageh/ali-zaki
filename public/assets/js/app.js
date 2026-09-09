/* =========================================================
   TABARAK - GLOBAL INITIALIZATION
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | AOS
    |--------------------------------------------------------------------------
    */

    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 80,
        });
    }


    /*
    |--------------------------------------------------------------------------
    | HERO SWIPER
    |--------------------------------------------------------------------------
    */

    const heroSwiper = document.querySelector('.hero-swiper');

    if (heroSwiper && typeof Swiper !== 'undefined') {

        new Swiper('.hero-swiper', {

            loop: true,

            speed: 1000,

            effect: 'fade',

            fadeEffect: {
                crossFade: true,
            },

            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },

            pagination: {
                el: '.hero-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.hero-next',
                prevEl: '.hero-prev',
            },

        });

    }


    /*
    |--------------------------------------------------------------------------
    | SIMPLE IMAGE REVEAL
    |--------------------------------------------------------------------------
    */

    const imageCards = document.querySelectorAll(
        '.service-card, .project-card, .about-visual'
    );

    if (imageCards.length) {

        imageCards.forEach(function (card) {

            card.addEventListener('mouseenter', function () {
                card.classList.add('is-hovered');
            });

            card.addEventListener('mouseleave', function () {
                card.classList.remove('is-hovered');
            });

        });

    }

});