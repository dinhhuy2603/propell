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
  intSliderCenter()
  actionBtnFixed()
}(jQuery));
