// methods
function intSliderKeyvisual() {
  var $sliderEl = $(".js-keyvisual");

  $sliderEl.slick({
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: false,
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true
  });

	//ticking machine
	var percentTime;
	var tick;
	var time = 1;
	var progressBarIndex = 0;

	$('.progressBarContainer .progressBar').each(function(index) {
	    var progress = "<span class='inProgress inProgress" + index + "'></span>";
	    $(this).html(progress);
	});

	function startProgressbar() {
	    resetProgressbar();
	    percentTime = 0;
	    tick = setInterval(interval, 10);
	}

	function interval() {
	    if (($sliderEl.find('.slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
	        progressBarIndex = $sliderEl.find('.slick-track div[aria-hidden="false"]').data("slickIndex");
	        startProgressbar();
	    } else {
        percentTime += 1 / (time + 5);
        $('.inProgress' + progressBarIndex).css({
            width: percentTime + "%"
        });
        if (percentTime >= 100) {
          $sliderEl.slick('slickNext');
          progressBarIndex++;
          if (progressBarIndex > 2) {
              progressBarIndex = 0;
          }
          startProgressbar();
        }
	    }
	}

	function resetProgressbar() {
	    $('.inProgress').css({
	        width: 0 + '%'
	    });
	    clearInterval(tick);
	}
	startProgressbar();
	// End ticking machine
	$('.progressBarContainer div').click(function () {
		clearInterval(tick);
		var goToThisIndex = $(this).find("span").data("slickIndex");
		$sliderEl.slick('slickGoTo', goToThisIndex, false);
		startProgressbar();
	});
}
function intSliderScroll() {
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

// slider Our Journey So Far sp
function intSliderJourney() {
  var $slickElement = $('.js-slider-journey');
  var htmlAdd = `<div class="slick-control-wrap">
  <button class="prev-btn-journey slick-arrow slick-prev"></button>
  <div class="slider-counter"></div>
  <button class="next-btn-journey slick-arrow slick-next"></button></div>`;

  $slickElement.after(htmlAdd);
  $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $slickElement.siblings(".slick-control-wrap").find(".slider-counter").text(i + '/' + slick.slideCount);
  });

  $slickElement.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnFocus: true,
    pauseOnHover: true,
    autoplay: false,
    // centerMode: true,
    // centerPadding: '1rem',
    prevArrow: '.prev-btn-journey',
    nextArrow: '.next-btn-journey',
    responsive: [{
      breakpoint: 9999,
      settings: "unslick"
    },{
      breakpoint: 750,
      settings: "getslick",
    }]
  });
}

function actionBtnFixed() {
  $(window).bind('scroll', function () {
    var target = $(".section-project").offset().top;
		if ($(window).scrollTop() > target) {
			$('#btn-fixed').addClass('active');
		} else {
			$('#btn-fixed').removeClass('active');
		}
	});
}

// call functions
(function ($) {
  intSliderKeyvisual()
  intSliderScroll()
  intSliderJourney()
  intSliderCenter()
  actionBtnFixed()
}(jQuery));

$(window).on('resize load orientationchange', function(){
  $(".js-slider-journey").slick("resize");
});
