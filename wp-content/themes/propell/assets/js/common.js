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
        $('body, html').animate({ scrollTop: $(id).offset().top - offsetTop })
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