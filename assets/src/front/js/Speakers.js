$(function()
{
    $(".menu-item").removeClass("selected");
    $(".menu-item#speakers-menu-item").addClass("selected");

    console.log("Reaches here");

    var noOfElements = 0;
    var carousel_width = 0;
    $(window).resize(function()
    {

        var carousel_width = $("#speaker_carousel_cont").outerWidth();
        var element_width = $(".speaker_element").outerWidth();
        var noOfElements = 0;


        if(carousel_width >= 1074)
        {
            noOfElements = 3;
        }
        else if(carousel_width >= 716)
        {
            noOfElements = 2;
        }
        else {
            noOfElements = 1;
        }

        $(".speakers_element_content_andar_ka_content").css("width", ((noOfElements * element_width) + ((noOfElements-1) * 12)) + "px");
      $(".speaker_element")
          .each(function()
          {
            var thisId = $(".speaker_element").index(this) + 1;

            var rowId = thisId % noOfElements;

            if(rowId == 0)
            rowId = noOfElements;

            var leftwidth = (rowId - 1)*(element_width + 12);
            var heightOfContent = $(this).find(".speakers_element_content_andar_ka_content").height() + 40;

            $(this)
                .find(".speakers_element_content")
                .css(
                  {
                    "width"  : ((noOfElements * element_width) + ((noOfElements-1) * 12)) + "px",
                    "left"   : "-" + leftwidth + "px"});

            $(this).find(".speaker_element_small_desc").css(
                {
                    "width":   $(this).outerHeight()
                }
            );
            $(this)
                .find("i.notch_arrow")
                .css(
                  {
                    "left" : (rowId - 1)*(element_width + 8) + 179 + "px"
                  });
          });
    });
    $(".speaker_element:not(.anonymous)").on("click", function()
    {
        if($(event.target).attr("class") == "fas fa-times cross_it")
        return 1;
        if($(this).hasClass("open"))
        return;
        var was_open = false;
        var wait_time = 0;
        if($(".speaker_element.open").length >= 1)
        {
            was_open = true;
            wait_time = 600;
            $(".speaker_element").removeClass("open");
        }
        $(".speaker_element").css("margin-top", "");
        $(".speaker_element").css("margin-bottom", "0px");
        $(".speakers_element_content")
        .css(
          {
            "height" : "0px"
          });
        var carousel_width = $("#speaker_carousel_cont").width();
        var element_width = $(".speaker_element").width();
        var element_padding = 20;
        var noOfElements = 0;
        var content_height = 300;


        if(carousel_width >= 1074)
        {
            noOfElements = 3;
        }
        else if(carousel_width >= 716)
        {
            noOfElements = 2;
        }
        else {
            noOfElements = 1;
        }

        var thisId = $(".speaker_element").index(this) + 1;

        var rowId = thisId % noOfElements;

        if(rowId == 0)
        rowId = noOfElements;

        var leftwidth = (rowId - 1)*(element_width + 8);
        var heightOfContent = $(this).find(".speakers_element_content_andar_ka_content").height() + 40;


        var elemToUse = $(this);

        setTimeout(function(){
          elemToUse
              .find(".speakers_element_content")
              .css(
                {
                  "height" : (heightOfContent + 120) + "px",
                  "opacity" : 1});


          var toSkipTill = (thisId - 1) + noOfElements - rowId + 1;
          // $(".speaker_element").each(function()
          // {
          //     if($(this).index(".speaker_element") <= toSkipTill)
          //     {
          //         return;
          //     }
          //     $(this)
          //         .css("margin-top", content_height + "px");
          // });
          elemToUse.css({"margin-bottom": (heightOfContent + 80) + "px"});
          elemToUse.addClass("open");

          scrollSpy(elemToUse.find(".speakers_element_content"), 1000);
        }, wait_time);

    });
    $(".cross_it").on("click", function()
    {
      $(".speaker_element").removeClass("open");
      $(".speaker_element").css("margin-top", "");
      $(".speaker_element").css("margin-bottom", "0px");
      $(".speakers_element_content")
      .css(
        {
          "height" : "0px"
        });
    });
    $(window).resize();
});
