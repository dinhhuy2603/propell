function intSliderTextScroll() {
  $('.js-swiper').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    variableWidth: true,
    cssEase: 'linear',
  });
}
// call functions
(function ($) {
  intSelectBox();
  intValidation();
  intSliderTextScroll();
}(jQuery));