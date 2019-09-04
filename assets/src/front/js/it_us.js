function replaceTeamImage(src, data) {
    data.attr("src", src);
}
$(function(){
    $(".team_thumb_img:not(.big)").on("click", function(){
        if($(this).hasClass("enlarge"))
        {
            $(".team_thumb_img").removeClass("enlarge");
            return;
        }

        $(".team_thumb_img").removeClass("enlarge");
        $(this).addClass("enlarge");

        var elem = $(this);
        setTimeout(function(){
            scrollSpy(elem, 400);
        }, 200);

        $(this).find("img").each(function()
        {
            var currImage = $(this);
            var currSrc = currImage.attr("data-src");
            imgLoader(currSrc, currImage, replaceTeamImage);
        });
    });
});