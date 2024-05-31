function intToggleAbout() {
  $(".js-toggle__head").on("click", function() {
    $(this).toggleClass("is-active");
    $(this).closest(".c-toggle").find(".c-toggle__main").slideToggle();
  });
}

function intEventSlider(autoplay = true) {
  var $slickElement = $('.js-event-slider');
  var htmlAdd = `<div class="slick-control-wrap">
  <button class="prev-btn slick-arrow slick-prev"></button>
  <div class="slider-counter"></div>
  <button class="next-btn slick-arrow slick-next"></button></div>`;

  $('.c-text__more').before(htmlAdd);

  $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $(".slider-counter").text(i + '/' + slick.slideCount);
  });

  $slickElement.slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnFocus: true,
    pauseOnHover: true,
    autoplay: autoplay,
    fade: true,
    prevArrow: '.prev-btn',
    nextArrow: '.next-btn',
  });
}

// call functions
(function ($) {
  intToggleAbout();
  intEventSlider();
}(jQuery));
