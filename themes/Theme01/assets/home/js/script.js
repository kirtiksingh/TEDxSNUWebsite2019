$(function () {
    window.onscroll = function(e)
    {
        if(window.scrollY > 100)
            document.querySelector("#top_strip").classList.add("downer");
        else
            document.querySelector("#top_strip").classList.remove("downer");
    }
});