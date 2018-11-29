"use strict"

$('.owl-carousel').owlCarousel({
    stagePadding:50,
    loop:true,
    margin:80,
    nav:true,
  	navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
  	dots: false,
    responsive:{
        0:{
            items:1,
            stagePadding:0,
            margin:35
        },
        600:{
            items:1,
            stagePadding:10,
            margin:50
        },
        1000:{
            items:1
        }
    }
})

$(document).ready(function(){
    $('.burger').click(function(){
        $('.nav').toggleClass('show');
        $('.main-nav').toggleClass('show-background');
        $('.burger').toggleClass('change');
        $('.cross').toggleClass('change');
        $('body').toggleClass('change');
    });
    $('.cross').click(function(){
        $('.nav').toggleClass('show');
        $('.main-nav').toggleClass('show-background');
        $('.burger').toggleClass('change');
        $('.cross').toggleClass('change');
        $('body').toggleClass('change');
    });
    $('.menu-item').click(function(){
        $('.nav').toggleClass('show');
        $('.main-nav').toggleClass('show-background');
        $('.burger').toggleClass('change');
        $('.cross').toggleClass('change');
        $('body').toggleClass('change');
    });
});