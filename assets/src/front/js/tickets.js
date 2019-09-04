/**
 * Created by c0mmand0 on 04-Oct-18.
 */
$(function()
{
    $(".terms_element .terms_element_header").on("click", function()
    {
        var faq_element = $(this).parent();
        if(faq_element.hasClass("selected"))
            faq_element.removeClass("selected");
        else
            faq_element.addClass("selected");
    });
});
