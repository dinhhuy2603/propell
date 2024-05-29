<<<<<<< HEAD
function intModal(){
  var modal = $(".c-modal");
  var btnClose = modal.find(".c-modal__close");
  btnClose.click(function(){
    modal.removeClass("is-active");
=======

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
>>>>>>> 76fea0a04c99a28ea68f7341ca35d134731e220c
  });
  modal.click(function(e){
    if(e.target !== this) return;
    modal.removeClass("is-active");
  });
}

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

function intValidation(){
  var form = $(".contact-form");

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

// call functions
(function ($) {
  intSelectBox();
  intModal();
  intValidation();
}(jQuery));
