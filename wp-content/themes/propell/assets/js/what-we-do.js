function intToggleBusiness() {
  $(".js-toggle__head").on("click", function() {
    $(this).toggleClass("is-active");
    var $content = $(this).closest(".c-toggle").find(".c-toggle__main");
    
    $content.slideToggle(400);
  });
}

function intSliderCenterMultiple() {
  var htmlAdd = `<div class="slick-control-wrap">
  <button class="prev-btn slick-arrow slick-prev"></button>
  <div class="slider-counter"></div>
  <button class="next-btn slick-arrow slick-next"></button></div>`;

  $(".js-slider-center").each(function(){
    var $slickElement = $(this);
    $slickElement.after(htmlAdd);
    var $prevBtn = $slickElement.siblings(".slick-control-wrap").find(".prev-btn");
    var $nextBtn = $slickElement.siblings(".slick-control-wrap").find(".next-btn");
    var $counter = $slickElement.siblings(".slick-control-wrap").find(".slider-counter");
    
    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      var i = (currentSlide ? currentSlide : 0) + 1;
      $counter.text(i + '/' + slick.slideCount);
    });

    $slickElement.slick({
      dots: false,
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      pauseOnFocus: true,
      pauseOnHover: true,
      autoplay: false,
      centerMode: true,
      centerPadding: '2.9375rem',
      variableWidth: true,
      prevArrow: $prevBtn,
      nextArrow: $nextBtn,
      responsive: [{
        breakpoint: 750,
        settings: {
          centerPadding: '1rem',
        }
      }]
    });
  })
}

(function ($) {
  if($(".js-slider-center").length){
    intSliderCenterMultiple();
  }
  if($(".js-slider-fade").length){
    intSliderFade();
  }
  intToggleBusiness();
  intTabs()
}(jQuery));