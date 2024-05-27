function intSliderProgress() {
  $(".js-slider-progress").each(function(){
    var $sliderEl = $(this);
    var $progressBar = $sliderEl.siblings('.slick-progress').find(".progress");
    var $prevBtn = $sliderEl.siblings('.slick-progress').find(".prev-btn");
    var $nextBtn = $sliderEl.siblings('.slick-progress').find(".next-btn");
    var $counter = $sliderEl.siblings('.slick-progress').find(".slider-counter");
    
    $sliderEl.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {   
      var currentDot = $sliderEl.find(".slick-dots .slick-active").index() + 1;
      var dots = $sliderEl.find('.slick-dots li').length;
      var calc = (currentDot/dots) * 100;
      
      $progressBar
        .css('background-size', calc + '% 100%')
        .attr('aria-valuenow', calc );

      var i = (currentSlide ? currentSlide : 0) + 1;
      $counter.text(i + '/' + dots);
    });

    $sliderEl.slick({
      infinite: false,
      arrows: true,
      dots: true,
      autoplay: false,
      speed: 800,
      slidesToShow: 3,
      slidesToScroll: 1,
      variableWidth: true,
      prevArrow: $prevBtn,
      nextArrow: $nextBtn,
      responsive: [{
        breakpoint: 750,
        settings: {
          // centerMode: true,
          // centerPadding: '1rem',
          slidesToShow: 1,
        }
      }]
    });
  })
}

(function ($) {
  if($(".js-slider-center").length){
    intSliderCenter(true);
  }
  intSliderProgress();
  intTabs()
}(jQuery));