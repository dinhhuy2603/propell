(function ($) {
    let isSend = localStorage.getItem('sendmail');
    if(isSend && isSend == 1) {
        $('.c-modal').addClass('is-active');
        localStorage.setItem('sendmail', 0);
    }
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
                required: $('#email_required').val(),
                minlength: $('#name_minlength').val()
            },
            email: {
                required: $('#email_required').val(),
                email: $('#email_format').val()
            },
            message: {
                required: $('#message_required').val(),
                minlength: $('#message_minlength').val()
            }
        },
        submitHandler: function(form){
            let input_name = $('#input_name').val();
            let input_email = $('#input_email').val();
            let input_subject = $('.select-menu').find('.options > .option.is-checked').data('val');
            let input_message = $('#input_message').val();
            let form_id = $('#btn-submit').data('id');
            $.ajax({
                url: ajax_url[0],
                type: "POST",
                dataType:'json',
                data: {
                  action:'send_contact_email',
                  name: input_name,
                  from: input_email,
                  to: input_subject,
                  message: input_message,
                  template_id: form_id
                }, success: function(response){
                    if(response.success) {
                        localStorage.setItem('sendmail', 1);
                        location.reload();
                    }
                }, error: function(error){
                    console.log(error);
                    location.reload();
                }
            });
        }
    });
}(jQuery));