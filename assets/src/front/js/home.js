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

$(function() {
    particlesJS(
        "page_title_cont",
        {
            "particles": {
                "number": {
                    "value": 100,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": ["#E53293", "#4D2A7C", "#E53293", "#4D2A7C", "#E53293", "#4D2A7C", "#E6D141"],
                },
                "shape": {
                    "type": "polygon",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 6
                    },
                },
                "opacity": {
                    "value": 1,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0,
                        "sync": false
                    }
                },
                "size": {
                    "value": 24.035957792858095,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 4,
                        "size_min": 0.3,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 600
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 250,
                        "size": 0,
                        "duration": 2,
                        "opacity": 0,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 400,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }
    );
});

$(function () {
    window.onscroll = function(e)
    {
        if(window.scrollY > (0.5 * window.innerHeight - 80))
            document.querySelector("#top_strip").classList.add("downer");
        else
            document.querySelector("#top_strip").classList.remove("downer");
    }

    $(window).scroll();
});