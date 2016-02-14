$('.portfolio-list').mixItUp();

$('.main-nav').click(function() {
    $(this).toggleClass('open');
});

//play/pause to video
var video = document.getElementById("video");

$( ".pause-video" ).click(function() {
    $(this).fadeOut(300);
    $(".play-video").fadeIn(300).css("display", "block");
});

$( ".play-video" ).click(function() {
    $( this ).fadeOut(300);
    $(".pause-video").fadeIn(300).css("display", "block");
});

function playVid() {
    video.play();
}
function pauseVid() {
    video.pause();
}

new WOW().init();

$(addAnimClasses)

function addAnimClasses(){
    $('.section-name').addClass('slideInDown wow').attr('data-wow-offset','200');
    $('.container > p').addClass('zoomIn wow').attr('data-wow-delay','.5s').attr('data-wow-offset','200');
    $('.in-section-block a').addClass('wow zoomIn').attr('data-wow-delay','1s');
    $('.clients-list li').addClass('fadeInDown wow').attr('data-wow-offset','200');
    $('.team-list li').addClass('flipInY wow').attr('data-wow-offset','100');
    $('.features-list li').addClass('flipInX wow').attr('data-wow-duration','1.2s').attr('data-wow-delay','1s');
    //$('#quotations-controls').addClass('fadeIn wow').attr('data-wow-delay','1s');
    //$('.newsletter-form input').addClass('fadeIn wow');

}
