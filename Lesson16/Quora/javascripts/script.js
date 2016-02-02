$(function () {
       $('.main-nav').click(function () {
           $(this).toggleClass('open');
       });
   });

$(document).ready(function() {
   $('a[href*=#]').bind('click', function(e) {
       e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump

       var target = $(this).attr("href"); //Get the target

       // perform animated scrolling by getting top-position of target-element and set it as scroll target
       $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 1000, function() {
           location.hash = target;  //attach the hash (#jumptarget) to the pageurl
       });

       return false;
   });
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 400){
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});

$(document).ready(function(){
    var options = {
        //slides: '.slide', // The name of a slide in the slidesContainer
        swipe: false,    // Add possibility to Swipe
        //magneticSwipe: false, // Add 'magnetic' swiping. When the user swipes over the screen the slides will attach to the mouse's position
        transition: "fade", // Accepts "slide" and "fade" for a slide or fade transition
        //slideTracker: true, // Add a UL with list items to track the current slide
        slideTrackerID: 'slide-tracker', // The name of the UL that tracks the slides
        //slideOnInterval: true, // Slide on interval
        interval: 4500, // Interval to slide on if slideOnInterval is enabled
        //animateDuration: 1500, // Duration of an animation
        //animationEasing: 'easeOutSine', // Accepts: linear ease in out in-out snap easeOutCubic easeInOutCubic easeInCirc easeOutCirc easeInOutCirc easeInExpo easeOutExpo easeInOutExpo easeInQuad easeOutQuad easeInOutQuad easeInQuart easeOutQuart easeInOutQuart easeInQuint easeOutQuint easeInOutQuint easeInSine easeOutSine easeInOutSine easeInBack easeOutBack easeInOutBack
        //pauseOnHover: false, // Pause when user hovers the slide container
        //useDefaultCSS: false, // Add default CSS for positioning the slides
        //neverEnding: true // Create a 'neverending/repeating' slider effect.
    };

    $(".projects-slider").simpleSlider(options);
});