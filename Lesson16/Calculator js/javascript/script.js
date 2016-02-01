$(document).ready(function(e) {
    var answer = $('.answer');
    var operation = $('.operation');
    var equals = $('.equals');

    function calculate (e) {
        e.preventDefault();
        var el = $(this);

        if(answer.val() == ''){
            return false;
            equals.attr('onclick','');
        }
        else if ( operation.attr('class') == 'activeAnswer') {
            operation.val(operation.val() + el.val() );
            answer.val('');
            equals.attr('onclick','');
        }
        else{
            operation.val(operation.val() + answer.val() + el.val());
            answer.val('');
            equals.attr('onclick','');
        }
    }
    
    $('.number').click(function(){
        var v = $(this).val();
        answer.val(answer.val() + v);
    });
    $('.clear').click(function(){
        answer.val('');
        operation.val('');
        operation.removeClass('activeAnswer');
        equals.attr('onclick','');
    });

    $('.plus').on('click', calculate);
    $('.subtract').on('click', calculate);
    $('.divide').on('click', calculate);
    $('.product').on('click', calculate);

    equals.click(function(){
        if(equals.attr('onclick') != 'return false'){

            var answerValue = answer.val();
            var operationValue = operation.val();
            var result = operationValue.concat(answerValue);
            answer.val(eval(result));
            operation.val(eval(result));
            operation.addClass('activeAnswer');
            equals.attr('onclick','return false');

        }
    });
});