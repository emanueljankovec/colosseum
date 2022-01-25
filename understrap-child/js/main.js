jQuery(document).ready(function($) {

    // On scroll add backgournd color to navbar
    $(window).scroll(function() {

        console.log($(this).scrollTop());
        if($(this).scrollTop() > 0) {
            $(".colosseum_navbar_container").addClass("scrolled");
        } 
        if($(this).scrollTop() <= 0) {
            $(".colosseum_navbar_container").removeClass("scrolled");
        }
    });
});