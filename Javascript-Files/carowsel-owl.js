$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        autoplay: true,
        autoHeight:false,
        smartSpeed: 500,
        dots: false,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
        }
    });
    $( ".owl-prev").html('<span class="icon-arrow-left2"></span>');
    $( ".owl-next").html('<span class="icon-arrow-right2"></span>');
});