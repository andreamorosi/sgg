$('document').ready(function(){
    $('.scopri-carousel').owlCarousel({
        nav:true,
        dots:false,
        loop:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.galleria-carousel').owlCarousel({
        nav:true,
        dots:false,
        loop:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.hero-carousel').owlCarousel({
        nav:true,
        dots:false,
        loop:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        items:1
    });

    function heroHeightHandler() {
        var headerHeight = $('.header-wrapper').height();
        var windowHeight = $(window).height();
        var heroHeight = windowHeight - headerHeight;
        $('.hero-carousel--item').height(heroHeight);
    };
    heroHeightHandler();
});
