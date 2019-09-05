jQuery(document).ready(function () {
        if ($('.t-slider')[0]) {
            $(".t-slider").owlCarousel({
                items: 4,
                loop: true,
                nav: true,
                dots: true,
                smartSpeed: 900,
                autoplay: true,
                autoplayTimeout: 5000,
                fallbackEasing: 'easing',
                transitionStyle: "fade",
                autoplayHoverPause: true,
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1
                    },
                    991: {
                        items: 2
                    },
                    1199: {
                        items: 3
                    }
                }
            });
        }
    });
jQuery(document).ready(function () {
    if ($('.testimonial-slider')[0]) {
        $(".testimonial-slider").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            smartSpeed: 900,
            autoplay: true,
            autoplayTimeout: 5000,
            fallbackEasing: 'easing',
            transitionStyle: "fade",
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
        });
    }
});