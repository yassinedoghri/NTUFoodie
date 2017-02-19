$(document).ready(function () {
    $('.parallax-window').parallax();

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $('#main-nav').addClass('navbar-md navbar-light bg-faded');
            $('#main-nav').removeClass('navbar-xl navbar-inverse');
        } else {
            $('#main-nav').addClass('navbar-xl navbar-inverse');
            $('#main-nav').removeClass('navbar-md navbar-light bg-faded');
        }
    });
});