var window_type = "pc"; 
$(function()
{
  var menu_bar_fixed_size = 100;
  var window_width = $(window).width();
  if(window_width <= "900")
  window_type = "mobile";
  $(window).resize(function()
  {
    window_width = $(window).width();
    if(window_width <= "900"){
      window_type = "mobile";
      $("body").addClass("mobile");
    }
    else
    {
      window_type = "pc";
      $("body").removeClass("mobile");
    }
  }).resize();
  $(window).scroll(function()
  {
      if(window_type == "mobile")
      return;
      var window_width = $(window).width();
      var window_height = $(window).height();

      var curr_scroll = $(window).scrollTop();

      if(curr_scroll >= 54)
      {
        $("#top_strip img#tedxLogo").css(
          {
            "height" : "30px",
            "padding-top" : "5px",
            "margin-top"  : "5px"
          });
      }
      else {
        var perc = curr_scroll / 54;

        $("#top_strip img#tedxLogo").css(
          {
            "height" : (55 - (perc * 25)) + "px",
            "padding-top" : (15 - (perc * 10)) + "px",
            "margin-top"  : (20 - (perc * 15)) + "px"
          });
      }
  });
  $("#hamburger").on("click", function()
  {
    $("body").toggleClass("leftMenuOpen");
  });
});

function scrollSpy(elem_selector, millis)
{

  var elem_top = elem_selector.offset().top;

  $("body, html").stop().animate({"scrollTop": (elem_top - 100)}, millis);

}

function imgLoader(src, data, callback)
{
    var img = new Image();
    img.onload = function(){callback(src, data)};
    img.src = src;
}
