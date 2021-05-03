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
  // load_effect();
  $(window).scroll(function() {
    // scroll_effect();

    // Page Top
    let scroll = $(document).scrollTop();
    let pageTop = $(".pageTop > div");
    let pageTop_txt = $(".pageTop > p");
    if(scroll > 0) {
      pageTop.fadeIn();
      pageTop_txt.fadeIn();
    } else {
      pageTop.fadeOut();
      pageTop_txt.fadeOut();
    }
  });
  // Load fade
  // function load_effect() {
  //   let tt = $(window).scrollTop();
  //   let hh = $(window).height();
  //   $(".load-fade").each(function() {
  //     let yy = $(this).offset().top;
  //     if(tt > yy - hh) {
  //       $(this).addClass("done");
  //     }
  //   });
  // }
  // Scroll fade
  // function scroll_effect() {
  //   let tt = $(window).scrollTop();
  //   let hh = $(window).height();
  //   $(".scroll-fade").each(function() {
  //     let yy = $(this).offset().top+100;
  //     if(tt > yy - hh) {
  //       $(this).addClass("done");
  //     }
  //   });
  // }

  // Modal
  $(".js-modal-open").each(function() {
    $(this).on("click", function() {
      let target = $(this).data("target"),
          modal = document.getElementById(target);
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

  $(window).on("load resize", function() {
    if (window.matchMedia("max-width:425px").matches) {
      console.log("I am a mobile!");
    }
  });

  // Media Rotation
  $(window).on("orientationchange", function() {
    let orientation = window.orientation;
    if(orientation !== 0) {
      alert("モバイルやタブレット端末をお使いの場合は、画面を縦向きにするとより見やすくなります。Vertical device orientation is reccomended for mobile and tablet");
    }
  });
});