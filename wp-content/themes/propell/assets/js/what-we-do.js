function intToggleBusiness() {
  $(".js-toggle__head").on("click", function() {
    $(this).toggleClass("is-active");
    var $content = $(this).closest(".c-toggle").find(".c-toggle__main");
    
    $content.slideToggle(400);
  });
}

(function ($) {
  if($(".js-slider-center").length){
    intSliderCenter(true);
  }
  if($(".js-slider-fade").length){
    intSliderFade();
  }
  intToggleBusiness();
  intTabs()
}(jQuery));