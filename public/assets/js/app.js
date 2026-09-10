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
    | MOBILE MENU
    |--------------------------------------------------------------------------
    */

    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileMenuToggle && mobileMenu) {

        mobileMenuToggle.addEventListener('click', function () {

            mobileMenuToggle.classList.toggle('active');
            mobileMenu.classList.toggle('open');

            const isOpen = mobileMenu.classList.contains('open');

            mobileMenuToggle.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );

        });


        /*
        | Close menu after clicking a link
        */

        mobileMenu.querySelectorAll('a').forEach(function (link) {

            link.addEventListener('click', function () {

                mobileMenuToggle.classList.remove('active');
                mobileMenu.classList.remove('open');

                mobileMenuToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

            });

        });


        /*
        | Close menu when clicking outside
        */

        document.addEventListener('click', function (event) {

            if (
                !mobileMenu.contains(event.target) &&
                !mobileMenuToggle.contains(event.target)
            ) {

                mobileMenuToggle.classList.remove('active');
                mobileMenu.classList.remove('open');

                mobileMenuToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

            }

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
         
