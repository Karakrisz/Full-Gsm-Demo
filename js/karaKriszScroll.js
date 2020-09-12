$(function () {

    var SCROLL_TIME = 1000;

    //  if (window.location.href.search('shop') == 28) {
    $(".scroll").click(menuClick);
    //  }

    function menuClick(event) {
        event.preventDefault();
        var id = '#' + $(this).attr("href").replace(/\.\/#/, '');
        $("html,body").animate({
            scrollTop: $(id).offset().top - 20
        }, SCROLL_TIME);
    }
});