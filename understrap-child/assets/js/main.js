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

    // Increase nav item with in footer
    $('.footer_navigation .nav-item').each( function() {
        var navItemWidth =  $(this).width();
        navItemWidth = navItemWidth + 5;
        $(this).width(navItemWidth);
    });

    $(document).on("click", "#colosseum_calendar .fc .fc-daygrid-day-frame", function(e) {
        $("#calendar_modal").modal('show');
        $(".colosseum_navbar_container").css("padding-right", "17px");
    });

    $(document).on('click', '.colosseum_mobile_hamburger', function() {
        if($(this).closest('.colosseum_navbar_container').find('.colosseum_mobile_navbar').css('display') == 'none') {
            $(this).closest('.colosseum_navbar_container').find('.colosseum_mobile_navbar').slideDown(200);
            $(this).find('.nav_close_icon').show();
            $(this).find('.nav_open_icon').hide();
        } else {
            $(this).closest('.colosseum_navbar_container').find('.colosseum_mobile_navbar').slideUp(200);
            $(this).find('.nav_close_icon').hide();
            $(this).find('.nav_open_icon').show();
        }
        
    });

});