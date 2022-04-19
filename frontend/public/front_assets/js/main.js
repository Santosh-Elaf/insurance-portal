$(document).ready(function () {
    /* header scoll code */
    $(window).scroll(function () {
        var sticky = $(".navbar"),
            scroll = $(window).scrollTop();
        if (scroll >= 10) {
            sticky.addClass("nav-dark-bg");
        } else {
            sticky.removeClass("nav-dark-bg");
        }
    });
});



