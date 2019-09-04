$(function()
{
  $(".menu-item").removeClass("selected");
  $(".menu-item#about-menu-item").addClass("selected");
  $(".imgParallax").imageScroll(
    {
      coverRatio: 0.5
    });
});
