function intModal(){
  var modal = $(".c-modal");
  var btnClose = modal.find(".c-modal__close");
  btnClose.click(function(){
    modal.removeClass("is-active");
  });
  modal.click(function(e){
    if(e.target !== this) return;
    modal.removeClass("is-active");
  });
}

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
  intModal();
  intSelectBox();
  // intValidation();
  intSliderTextScroll();
}(jQuery));