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

// call functions
(function ($) {
  intSelectBox();
  intModal();
  intValidation();
}(jQuery));
