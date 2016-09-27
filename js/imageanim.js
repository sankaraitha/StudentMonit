$(function(){
  //  $("#slider").slideUp(500).hide(500).slideDown(500);
    var currentslide=2;
    var pause=3000;
    var $slideContainer = $('.slides');
    var $slides= $("#slider .slide");
    var animspeed=2000;
    var interval;
    //-=500 px is the width of pic to slide
    function start(){
    interval=setInterval(function(){ $("#slider .slides").animate({'margin-left':'-=500px'},animspeed,function(){
           currentslide++ ;
           if(currentslide === $slides.length) {
            currentslide=1;
            $(this).css({"margin-left": 0});
        }
      });
    },pause);
  }
  function stop(){
    clearInterval(interval);
  }

  $('.slides').on('mouseenter',stop).on('mouseleave',start);
  start();


});
