jQuery(document).ready(function (b) {
    let c = 300,
        e = 1200,
        a = 700,
        d = b(".back_to_top");
    b(window).scroll(function () {
        (b(this).scrollTop() > c) ? d.addClass("btt-visible") : d.removeClass("btt-visible btt-fade-out");
        if (b(this).scrollTop() > e) {
            d.addClass("btt-fade-out")
        }
    });
    d.on("click", function (f) {
        f.preventDefault();
        b("body,html").animate({
            scrollTop: 0,
        }, a)
    })
});