var curr_speaker = 0;
$(function() {
    var current_scroll_element = 0;
    $(".menu-item").removeClass("selected");
    $(".menu-item#qissa-menu-item").addClass("selected");

    $(".past_speaker_single_thumb")
        .on("mouseenter", function () {
            var sizeOfThumb = 158;
            var ind = $(".past_speaker_single_thumb").index(this);
            var normal_move = 0.2 * sizeOfThumb;
            var move_left = 0, move_right = 0, position_move = 0;
            var noOfThumbs = $(".past_speaker_single_thumb").length;
            if (ind == current_scroll_element) {
                position_move = normal_move / 2;
                move_left = 0;
                move_right = 2 * normal_move;
            }
            else {
                position_move = 0;
                move_left = normal_move;
                move_right = normal_move;
            }

            $(this).css(
                {
                    "transform": "scale(1.2)",
                    "z-index": "200"
                });
            /*if(ind != current_scroll_element)
             {
             for(var i = 0; i < ind; i++)
             {
             $(".past_speaker_single_thumb").eq(i).css("transform", "translateX(-" + move_left + "px)");
             }
             }
             for(var i = ind+1; i < noOfThumbs; i++)
             {
             $(".past_speaker_single_thumb").eq(i).css("transform", "translateX(" + move_right + "px)");
             }*/
        })
        .on("mouseleave", function () {
                $(".past_speaker_single_thumb").css(
                    {
                        "transform": "none",
                        "z-index": "auto",
                        "margin-left": "0.5px",
                        "margin-right": "0.5px"
                    }
                );
            }
        );
    $(".past_speaker_single_thumb").on('click', function () {
        var ind = $(".past_speaker_single_thumb").index(this);
        curr_speaker = ind;
        var widthOne = 0;
        widthOne = $(".past_speaker_single_content").width();
        $("#past_speaker_content").stop().animate({"scrollLeft": widthOne * ind}, 1000);
        scrollSpy($("#past_speaker_content"), 1000);
    });
    $(window).resize(function()
    {
        var widthOne = $(".past_speaker_single_content").width();
        $("#past_speaker_content").stop().animate({"scrollLeft": widthOne * curr_speaker}, 1000);
    });
});