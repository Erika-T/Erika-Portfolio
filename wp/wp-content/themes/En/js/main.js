$(function(){
  // Smooth Scroll
  $('a[href^="#"]').click(function(){
    let speed = 500,
      href= $(this).attr("href"),
      target = $(href == "#" || href == "" ? 'html' : href),
      position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

  // Fade up
  load_effect();
  $(window).scroll(function() {
    scroll_effect();

    // Page Top
    let scroll = $(document).scrollTop();
    let pageTop = $(".scrollUp");
    if(scroll > 0) {
      pageTop.fadeIn();
      pageTop
    } else {
      pageTop.fadeOut();
    }
  });
  // Load fade
  function load_effect() {
    let tt = $(window).scrollTop();
    let hh = $(window).height();
    $(".load-fade").each(function() {
      let yy = $(this).offset().top;
      if(tt > yy - hh) {
        $(this).addClass("done");
      }
    });
  }
  // Scroll fade
  function scroll_effect() {
    let tt = $(window).scrollTop();
    let hh = $(window).height();
    $(".scroll-fade").each(function() {
      let yy = $(this).offset().top+100;
      if(tt > yy - hh) {
        $(this).addClass("done");
      }
    });
  }
});