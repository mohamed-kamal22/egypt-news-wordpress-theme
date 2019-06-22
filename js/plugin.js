$(document).ready(function(){

    $("nav i.icon").click(function(){
        $("header nav ul li , .nav-icon ").slideToggle(600)
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    $(window).scroll(function() {
        var window = $(this).scrollTop()
        if ( window > 100) {
            $('.scrollTop').fadeIn()
        } else {
            $('.scrollTop').fadeOut()
        }
    });

    $('.scrollTop').click(function(){
        $('body,html').animate({
            scrollTop : 0
        },500);
    });

})