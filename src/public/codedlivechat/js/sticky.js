$(document).ready((function() {
    var o = $(".sticky"),
        s = "sticky-pin",
        n = o.offset().top;

    function t() {
        $(this).scrollTop() >= n ? o.addClass(s) : o.removeClass(s)
    }
    t(), $(window).scroll((function() {
        t()
    }))
}));