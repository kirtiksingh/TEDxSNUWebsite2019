

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
