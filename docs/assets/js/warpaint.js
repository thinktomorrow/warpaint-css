// STICKY
var stickable = $("div header");
var navUp = $('.nav__up');

$(document).onLoad( 'scroll', function(){
    if ($(this).scrollTop() > 100) {
        stickable.addClass("sticky");
        navUp.addClass('active');
    } else {
        stickable.removeClass("sticky");
        navUp.removeClass('active');
    }
});

$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 1000);
                return false;
            }
        }
    });
});
