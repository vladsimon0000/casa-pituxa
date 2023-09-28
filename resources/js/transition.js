let transitionTrigger = $(".transition__trigger"),
    homeTransitionTrigger = $(".transition__home-trigger"),
    exitDurationMS = 1050,
    excludedClass = "no-transition";

$("a").on("click", function (e) {
    if (
        $(this).prop("hostname") == window.location.host &&
        -1 === $(this).attr("href").indexOf("#") &&
        !$(this).hasClass("excludedClass") &&
        "_blank" !== $(this).attr("target") &&
        transitionTrigger.length > 0
    ) {
        e.preventDefault(), $("body").addClass("no-scroll-transition");
        let transitionURL = $(this).attr("href");
        $(this).hasClass("brand")
            ? (homeTransitionTrigger.click(),
                setTimeout(function () {
                    window.location = transitionURL;
                }, 450))
            : (transitionTrigger.click(),
                setTimeout(function () {
                    window.location = transitionURL;
                }, exitDurationMS));
    }
})