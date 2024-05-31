var common = {
  hamburgerMenu: function() {
    var menuEl = $(".menu-toggle");
    var searchEl = $(".search-toggle");
    // menu
    $('.js-hamburger').click(function() {
        if ($("body").hasClass("nav--open")) {
          closeMenu($(this), menuEl)
        } else {
          openMenu($(this), menuEl)
        }
    })
    $(".menu-toggle a, .js-hamburger--close").click(function () {
      closeMenu($('.js-hamburger'), menuEl)
    });

    // search
    $('.js-search').click(function() {
      if ($("body").hasClass("nav--open")) {
        closeMenu($(this), searchEl)
      } else {
        openMenu($(this), searchEl)
      }
    })
    $(".js-search--close").click(function () {
      closeMenu($('.js-search'), searchEl)
    });


    function closeMenu(element, block){
      $("body").addClass("nav--close").removeClass("nav--open");
      block.fadeOut(150);
      element.removeClass("is-active");
    }
    function openMenu(element, block){
      $("body").addClass("nav--open").removeClass("nav--close");
      block.fadeIn(150);
      element.addClass("is-active");
    }
  },
  anchorLink: function() {
    $('a[href^="#"]').not('[href="#"]').not('[href*="#tab"]').not('[href*="#modal"]').click(function(e) {
      var id = $(this).attr('href')
      if (id.split('')[0] === '#' && id != '#') {
          var offsetTop = 0
          // event.preventDefault();
        if ($('.header').length > 0 && $(window).width() >= 1024) {
          offsetTop =  $('.header').height()
        }
        // $('body, html').animate({ scrollTop: $(id).offset().top - offsetTop })
        $('body, html').animate({ scrollTop: $(id).offset().top + 10 })
      } 
    })
    //anchor link different page
    var urlHash = window.location.href.split("#")[1];
    if (urlHash &&  $('#' + urlHash).length) {
      setTimeout(function(){
        $(window).scrollTop($('#' + urlHash).offset().top)
      }, 400)
    }
  },
  init: function() {
    this.hamburgerMenu();
    this.anchorLink();
  },
};
common.init();

function intToggle() {
  $(".js-toggle").on("click", function(){
    $(this).toggleClass("active");
    $(this).siblings().slideToggle();
  })
}

function intToggleLanguage() {
  $(".js-toggle").on("click", function(){
    $(this).toggleClass("active");
    $(this).siblings().slideToggle();
  })
}

function intTabs() {
  $('.js-tabs__head .item:first-child').addClass('is-active');
  $('.c-tabs__main--item:first').addClass('active');

  $(".js-tabs__head .item").on("click", function(){
    $(this).siblings().removeClass('is-active');
    $(this).addClass('is-active');
    $('.c-tabs__main--item').removeClass('active');
    
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).addClass('active');
    return false;
  });
}

// slider centerMode
function intSliderCenter(autoplay = true) {
  var $slickElement = $('.js-slider-center');
  var htmlAdd = `<div class="slick-control-wrap">
  <button class="prev-btn slick-arrow slick-prev"></button>
  <div class="slider-counter"></div>
  <button class="next-btn slick-arrow slick-next"></button></div>`;

  $slickElement.after(htmlAdd);
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
    centerMode: true,
    centerPadding: '2.9375rem',
    variableWidth: true,
    prevArrow: '.prev-btn',
    nextArrow: '.next-btn',
    responsive: [{
      breakpoint: 750,
      settings: {
        centerPadding: '1rem',
      }
    }]
  });
}

// slider fade progressbar
function intSliderFade() {
  var $sliderEl = $(".js-slider-fade");

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


function intSelectBox() {
  const optionMenu = $(".select-menu"),
  selectBtn = optionMenu.find(".select-btn"),
  options = optionMenu.find(".option"),
  sBtn_text = optionMenu.find(".sBtn-text");

   // Set the default option
   const defaultOption = options.first();
   const defaultOptionText = defaultOption.find(".option-text").text();
   defaultOption.addClass("is-checked");
   sBtn_text.text(defaultOptionText);

  selectBtn.on("click", function () {
    optionMenu.toggleClass("active");
  });

  options.each(function () {
    $(this).on("click", function () {
      options.removeClass("is-checked");
      $(this).addClass("is-checked");
      let selectedOption = $(this).find(".option-text").text();
      sBtn_text.text(selectedOption);
      optionMenu.removeClass("active");
    });
  });
}

function intValidation(){
  var form = $(".c-form");

  form.validate({
    rules: {
      name: {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        email: true
      },
      message: {
        required: true,
        minlength: 10
      }
    },
    messages: {
      name: {
        required: "(Please enter your name)",
        minlength: "(Your name must consist of at least 3 characters)"
      },
      email: {
        required: "(Please enter your email)",
        email: "(This email is in the wrong format)"
      },
      message: {
        required: "(Please enter your message)",
        minlength: "(Your message must consist of at least 10 characters)"
      }
    },
    submitHandler: function(form){
      form.submit();
    }
  });
}

// call function
(function ($) {
  intToggleLanguage()
}(jQuery));