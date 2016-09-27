$(function(){
  //  $("#slider").slideUp(500).hide(500).slideDown(500);
    var currentslide=1;
    var pause=5000;
    var $slideContainer = $('.slides');
    var $slides= $(".slides .slide");
    var animspeed=2000;
    var interval;
    //-=500 px is the width of pic to slide
    function start(){
    interval=setInterval(function(){ $("#slider .slides").animate({'margin-left':'-=700px'},animspeed,function(){
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
  $("#text1").focus(function(){
    $(this).css({"width":"200px","border-color":"green","color":"green"});
  });
  $("#text2").focus(function(){
    $(this).css({"width":"200px","border-color":"green"});
  });
  $("#caption").on("mouseenter",function(){
  $(this).css({"color":"white"});
  });
  $("#caption").on("mouseleave",function(){
  $(this).css({"color":"blue"});
  });
  $(".bord").on({
  mouseenter:function(){
  $(this).css({"color":"blue"});
  },
  mouseleave:function(){
  $(this).css({"color":"white"});
  }
  });
}

);
