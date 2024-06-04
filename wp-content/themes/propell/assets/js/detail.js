function intAnchorLinkDetail() {
  $(".js-anchor-detail").click(function(e) {
    var id = $(this).attr("href");
    $(".js-anchor-detail").removeClass("is-active");
    $(this).addClass("is-active");

    if (id.split("")[0] === "#" && id != "#") {
      var offsetTop = 0;
      event.preventDefault();
      if ($(".header").length > 0) {
        if ($(window).width() < 750) {
          offsetTop = $(".header").outerHeight() + $(".kv__submenu").outerHeight();
        } else {
          offsetTop = $(".header").outerHeight();
        }
      }
      $("body, html").animate({ scrollTop: $(id).offset().top - offsetTop + 2});
    }
  });
}

function intDetectNaviDetail() {
  var naviDetail = $(".kv__submenu");
  var triggerKv = $(".kv__img").offset().top - ($(".kv__img").outerHeight() / 2);
  $(window).scroll(function() {
    if ($(window).scrollTop() > triggerKv) {
      naviDetail.addClass("is-show");
    } else {
      naviDetail.removeClass("is-show");
    }
  });
}

$(function () {
  intAnchorLinkDetail();
  intDetectNaviDetail();
}(jQuery));