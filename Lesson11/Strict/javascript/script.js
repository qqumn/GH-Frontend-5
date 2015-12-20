//function vAlignDesc() {
//    var descHeight = $('section.desc').height();
//    var wrapperHeight = $('section.desc div.wrapper').height();
//
//    $('section.desc div.wrapper').css({
//        top: (descHeight/2) - (wrapperHeight/2)
//    });
//}

$(function() {

    $('.arrow-down').click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('section.intro').offset().top
        },1000);
    });

});

$(window).scroll(function(){
    var pos = $(window).scrollTop();

    $('.arrow-down').css('opacity',1 - (pos/600))
});