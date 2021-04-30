$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 1000) {
        $("header.ps-fixed").addClass("transparent");
    } else {
        $("header.ps-fixed").removeClass("transparent");
    }
});