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

    $(document).on("click", ".colosseum_form_submit_btn", function(e) {

        var action = "send_mail";
        var data = {};
        var ajaxUrl = $("#ajax_url").val();
        data.action = action;
        var msg = {};
        msg.name = $('#name_input').val();
        msg.email = $('#last_name_input').val();
        msg.message = $('#email_input').val();
        
        $.post(ajaxUrl, data, function(res){
            $(".colosseum_form_bottom_part").empty().html(res);
        })
    });

    
});