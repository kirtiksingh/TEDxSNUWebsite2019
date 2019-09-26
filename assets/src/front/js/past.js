var slideshow_move = 0;
var thumb_move=0;
$(function()
{
  var current_scroll_element = 0;
  $(".menu-item").removeClass("selected");
  $(".menu-item#past-conf-menu-item").addClass("selected");

  $(".past_speaker_single_thumb")
  .on("mouseenter", function()
  {
    var sizeOfThumb = 308;
    var ind = $(".past_speaker_single_thumb").index(this);
    var normal_move  = 0.2 * sizeOfThumb;
    var move_left = 0, move_right = 0, position_move = 0;
    var noOfThumbs = $(".past_speaker_single_thumb").length;
    if(ind == current_scroll_element)
    {
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
        "transform" : "scale(1.2)",
        "z-index" : "200"
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
    .on("mouseleave", function()
    {
      $(".past_speaker_single_thumb").css(
        {
          "transform" : "none",
          "z-index" : "auto",
          "margin-left" : "0.5px",
          "margin-right" : "0.5px"
        }
      );
    }
  );
  $(".past_speaker_single_thumb").on('click', function()
  {
    var ind = $(".past_speaker_single_thumb").index(this);
    var widthOne = 0;
    widthOne = $("#past_speaker_content").width();
    console.log(widthOne);
    console.log(widthOne * ind);
    $("#past_speaker_content").stop().animate({"scrollLeft": widthOne * ind}, 1000);
    scrollSpy($("#past_speaker_content"), 1000);

    var widthOfVid = 0, heightofvid = 0;
    if(widthOne > 900)
    {
      widthOfVid = 560;
      heightofvid = 315;
    }
    else {
      widthOfVid = $(".past_speaker_single_content").eq(ind).find(".speaker_single_content_right").width();
      heightofvid = widthOfVid * (315/560);
    }

    var yt_link = $(".past_speaker_single_content").eq(ind).find(".speaker_single_content_right").attr("data-src");
      $(".past_speaker_single_content").eq(ind).find(".speaker_single_content_right").html("<iframe width=\"" + widthOfVid + "\" height=\"" + heightofvid + "\" src=\"" + yt_link + "\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>");
  });

  $(".slideshow_arrow").on("click", function()
  {
    var noOfImages = $(".slideshow_element").length;

    if($(this).hasClass("ss_move_left"))
    {
      if(slideshow_move == 0)
      return;

      var widthOfImage = $(".slideshow_element").width();

      var moveTo = (widthOfImage + 60) * (slideshow_move - 1);
      slideshow_move--;

      $("#slideshow_holder > .rel").stop().animate(
        {
          "scrollLeft" : moveTo
        });
    }
    else
    {
      if(slideshow_move == (noOfImages - 1))
      return;

      var widthOfImage = $(".slideshow_element").width();

      var moveTo = (widthOfImage + 60) * (slideshow_move + 1);
      slideshow_move++;

      $("#slideshow_holder > .rel").stop().animate(
        {
          "scrollLeft" : moveTo
        });
    }
  });
  $(".arrows_to_move").on("click", function()
  {
    var elemOneRow = Math.floor($(window).width() / 308);
    var toMove = elemOneRow * 308;
    var max_thumb_move = Math.ceil($(".past_speaker_single_thumb").length / elemOneRow) - 1;

    console.log("elemOneRow " + elemOneRow);
    console.log("toMove " + toMove);
    console.log("max_thumb_move " + max_thumb_move);
    if($(this).hasClass("atm_left"))
    {
      if(thumb_move == 0)
      return;

      thumb_move--;

    }
    else {
      if(thumb_move == max_thumb_move)
      return;
      thumb_move++;
    }
    console.log("thumb_move " + thumb_move);

    $("#past_speakers_tile_ribbon > .rel").stop().animate({"scrollLeft": thumb_move * elemOneRow}, 400);

  });
  $(window).resize(function()
  {
    $("#slideshow_holder").height(0.66 * $("#slideshow_holder").width());
  }).resize();
});
