var inputField = $('.input-field');
var submit = $('.submit');

$('form.input-form').submit(function () {
    if (inputField.val() !== '') {
        var input_value = inputField.val();
        $('ul').append('<li>' + input_value + '<span class="fa fa-times"></span></li>');
        submit.attr('disabled', 'disabled');
    };
    inputField.val('');
    return false;
});
$(document).ready(function() {
    inputField.keyup(function() {

        var empty = false;
        inputField.each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            submit.attr('disabled', 'disabled');
        } else {
            submit.attr('disabled', false);
        }
    });
});
$(document).on('click', '.fa-times', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

$(document).on('click', '.tasks li', function () {
    if ($(this).css('opacity') == '0.3'){
        $(this).css({
            'opacity':'1',
            'text-decoration': 'none'
        });
    } else {
        $(this).css({
            'opacity': '0.3',
            'text-decoration': 'line-through'
        });
    }
});