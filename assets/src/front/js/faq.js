$(function()
{
  $(".faq_element .faq_element_header").on("click", function()
  {
    var faq_element = $(this).parent();
    if(faq_element.hasClass("selected"))
    faq_element.removeClass("selected");
    else
    faq_element.addClass("selected");
  });
});
