$(function(){
  // Parallax
  // let $window = $(window);
 
  // $('.contents').each(function(index) {
  //   let $self = $(this);
  //   let offsetPositions = $self.offset();
 
  //   $(window).scroll(function() {
      // この領域がブラウザに表示されている場合
  //     if (($window.scrollTop() + $window.height()) > offsetPositions.top && ((offsetPositions.top + $self.height()) > $window.scrollTop())) {
  //       let offsetY =  -(($window.scrollTop() - offsetPositions.top)/ 17); 
  //       let positions = '50%' + offsetY + 'px';
  //       $self.css('backgroundPosition', positions);
  //     }
  //   });
  // });

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

  // Modal
  $(".js-modal-open").each(function() {
    $(this).on("click", function() {
      let target = $(this).data("target");
      let modal = document.getElementById(target);
      $(modal).fadeIn();
      return false;
    });
  });
  $(".js-modal-close").on("click", function() {
    $(".js-modal").fadeOut();
    return false;
  });

  // About Footer
  $(".contents:last").append("<footer>@2021 Web Developer Erika</footer>");
});