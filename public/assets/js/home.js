document.addEventListener('DOMContentLoaded', function () {

    const heroElement = document.querySelector('.hero-swiper');

    if (!heroElement) {
        return;
    }

    const isRtl = document.documentElement.dir === 'rtl';

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

        rtl: isRtl,

        on: {
            init: function () {
                animateHero(this);
            },

            slideChangeTransitionStart: function () {
                animateHero(this);
            },
        },
    });

    function animateHero(swiper) {

        const slide = swiper.slides[swiper.activeIndex];

        if (!slide) {
            return;
        }

        const elements = slide.querySelectorAll(
            '.hero-subtitle, .hero-title, .hero-description, .hero-buttons'
        );

        if (!window.gsap || !elements.length) {
            return;
        }

        gsap.killTweensOf(elements);

        gsap.set(elements, {
            opacity: 0,
            y: 35,
        });

        gsap.to(elements, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.12,
            ease: 'power3.out',
        });
    }

});