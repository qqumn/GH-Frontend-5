$(document).ready(function(e) {
    $('label').click(function(){
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $('label').removeClass('active');
            $(this).addClass('active');
        }
    });
});