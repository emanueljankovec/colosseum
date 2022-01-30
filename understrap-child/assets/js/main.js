jQuery(document).ready(function($) {

    // On scroll add backgournd color to navbar
    $(window).scroll(function() {

        if($(this).scrollTop() > 0) {
            $(".colosseum_navbar_container").addClass("scrolled");
        } 
        if($(this).scrollTop() <= 0) {
            $(".colosseum_navbar_container").removeClass("scrolled");
        }
    });

    if($(window).scrollTop() > 0) {
        $(".colosseum_navbar_container").addClass("scrolled");
    } else {
        $(".colosseum_navbar_container").removeClass("scrolled");
    }

    $(document).on('click', '.colosseum_home_arrow', function() {
        $('html, body').animate({
            scrollTop: $("#colosseum_home_about").offset().top - 128
        }, 500);
    });
});