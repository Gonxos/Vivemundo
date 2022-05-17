const responsive = {
    360: {
        items: 1
    },
    600: {
        items: 1
    },
    800: {
        items: 2
    },
    900: {
        items: 2
    },
    1000: {
        items: 3
    },
    1200: {
        items: 3
    },
    1280: {
        items: 4
    }
}

$(document).ready(function () {

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');
    $toggleCollapse.click(function () {
        $nav.toggleClass('collapse');
    })

    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        dots: false,
        nav: true,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        responsive: responsive
    });

    $('.move-up span').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    })

    AOS.init();

});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header").addClass("activee");
        } else {
           $(".header").removeClass("activee");
        }
    });
});
