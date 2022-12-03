$(document).ready(function(){

    $("#slider-hero").owlCarousel({
        loop: true,
        nav: true,
        //mouseDrag:false,
        items: 1,
        dots:false,
        margin:0,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        navContainer: "#slider-hero-nav",
    })

    $("#tenaga-pendidik-slider").owlCarousel({
        loop: true,
        // nav: true,
        // mouseDrag:false,
        items: 3,
        dots:false,
        margin: 30,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        navContainer: "#slider-tools-1",
    })
});