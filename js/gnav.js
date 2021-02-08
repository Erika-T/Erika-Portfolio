$(function(){
  // Hamburger Button
  $("#js-btnHamburger").click(function(){
    $("body").toggleClass("is-drawerActive");

    if($(this).attr("aria-expanded") === "false") {
      $(this).attr("aria-expanded", true);
    } else {
      $(this).attr("aria-expanded", false);
    }

    if($(this).attr("aria-expanded") === "true") {
      $(".fadeUp").css({
        "opacity" : 1,
        "transform" : "translate(0, 0)"
      });
      $(".fadeDown").css({
        "opacity" : 1,
        "transform" : "translate(0, 0)"
      });
    } else {
      $(".fadeUp").css({
        "opacity" : 0,
        "transform" : "translate(0, 100px)"
      });
      $(".fadeDown").css({
        "opacity" : 0,
        "transform" : "translate(0, -100px)"
      });
    }
  });
});