var skip_auto = 0;
$(function()
{
    var slideshow_move = 0;
    $(".slideshow_arrow").on("click", function()
    {
        var noOfImages = $(".slideshow_element").length;
        skip_auto = 2;

        if($(this).hasClass("ss_move_left"))
        {
            if(slideshow_move == 0)
                slideshow_move = noOfImages;

            var widthOfImage = $(".slideshow_element").width();

            var moveTo = (widthOfImage) * (slideshow_move - 1);
            slideshow_move--;

            $("#slideshow_holder > .rel").stop().animate(
                {
                    "scrollLeft" : moveTo
                });
            $("#slideshow_holder").stop().animate(
                {
                    "height"    :   $(".slideshow_element").eq(slideshow_move).height() + "px"
                });
        }
        else
        {
            if(slideshow_move == (noOfImages - 1))
                slideshow_move = -1;

            var widthOfImage = $(".slideshow_element").width();

            var moveTo = (widthOfImage) * (slideshow_move + 1);
            slideshow_move++;

            $("#slideshow_holder > .rel").stop().animate(
                {
                    "scrollLeft" : moveTo
                });

            $("#slideshow_holder").stop().animate(
                {
                    "height"    :   $(".slideshow_element").eq(slideshow_move).height() + "px"
                });
        }
    });
    setTimeout(function()
    {
        setInterval(function(){
            if(skip_auto)
            {
                skip_auto--;
                return;
            }

            $(".slideshow_arrow.ss_move_right").trigger("click");
            skip_auto = 0;
        }, 3000);
    }, 3000);

    $(".menu-item").removeClass("selected");
    $(".menu-item#home-menu-item").addClass("selected");
});