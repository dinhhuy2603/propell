
function intSelectBox() {

  const optionMenu = $(".select-menu"),
  selectBtn = optionMenu.find(".select-btn"),
  options = optionMenu.find(".option"),
  sBtn_text = optionMenu.find(".sBtn-text");

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

// call functions
(function ($) {
  intSelectBox();
}(jQuery));
