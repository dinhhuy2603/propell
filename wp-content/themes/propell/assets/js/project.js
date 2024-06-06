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
      infinite: true,
      arrows: true,
      dots: true,
      autoplay: false,
      speed: 800,
      slidesToShow: 1,
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

function intSliderProjectDetailTab() {
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
    intSliderProjectDetailTab();
  }
  intSliderProgress();
}(jQuery));