function intToggleAbout() {
  $(".js-toggle__head").on("click", function() {
    $(this).toggleClass("is-active");
    var $content = $(this).closest(".c-toggle").find(".c-toggle__main");
    
    $content.slideToggle({
      duration: 400,
      // complete: function() {
      //   if ($content.is(":visible")) {
      //     $content.find('.js-slider').slick('setPosition');
      //   }
      // }
    });
  });
}

function intSlider() {
  $('.js-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });
}

// call functions
(function ($) {
  intSlider();
  intToggleAbout();
}(jQuery));
