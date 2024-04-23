// Smooth scrolling
$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

// Sticky navigation
var nav = $('nav');
var navPosition = nav.offset().top;

$(window).scroll(function() {
    var scrollPosition = $(this).scrollTop();

    if (scrollPosition >= navPosition) {
        nav.addClass('sticky');
    } else {
        nav.removeClass('sticky');
    }
});