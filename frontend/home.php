<?php
$GLOBALS['themeVari'] = "home";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js", "src/front/js/jquery.downCount.js", "src/front/js/home.js");
$GLOBALS['printPage'] = function()
{
	?>
	<link rel="stylesheet" href="<?php echo $GLOBALS['astLink'] ; ?>src/front/css/home.css">

    <style type="text/css">
        ul.countdown {
            list-style: none;
            margin: 35px 0;
            padding: 0;
            display: block;
            text-align: center;
            color: #FFFFFF;
        }
        ul.countdown h1
        {
            font-size: 20px;
        }
        ul.countdown li {
            display: inline-block;
        }
        ul.countdown li span {
            font-size: 50px;
            font-weight: 300;
            line-height: 80px;
        }
        ul.countdown li.seperator {
            font-size: 80px;
            line-height: 70px;
            vertical-align: top;
        }
        ul.countdown li p {
            font-size: 12px;
        }
        #anim
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        #timeTill
        {
            padding: 10px;
            display: inline-block;
            background-color: #00000055;
            z-index: 100000;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 20px;
            white-space: nowrap;
        }
    </style>
    <div class="page_title_block" style="height: 100vh; position: fixed; top: 0; left: 0; width: 100vw; z-index: -1;">
        <div id="anim"></div>
        <div id="page_title_cont" style="height: 100%; background-color: transparent;">
            <div id="timeTill">
                <ul class="countdown">
                    <h1>Time to Ticket Sales:</h1>
                    <li> <span class="days">00</span>
                        <p class="days_ref">days</p>
                    </li>
                    <li class="seperator">.</li>
                    <li> <span class="hours">00</span>
                        <p class="hours_ref">hours</p>
                    </li>
                    <li class="seperator">:</li>
                    <li> <span class="minutes">00</span>
                        <p class="minutes_ref">minutes</p>
                    </li>
                    <li class="seperator">:</li>
                    <li> <span class="seconds">00</span>
                        <p class="seconds_ref">seconds</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="content">
        <div id="slideshow_holder">
            <div class="rel">
                <div id="slideshow_reel">
                    <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                        <img style="width: 100%;padding:0" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SpeakerSlides-01.png">
                    </a>
                    <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                        <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SpeakerSlides-05.png">
                    </a>
                    <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                        <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SpeakerSlides-06.png">
                    </a>
                    <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                        <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SpeakerSlides-09.png">
                    </a>
                </div>
            </div>
            <div class="slideshow_arrow ss_move_left">
                <div class="rel">
                    <i class="fas fa-caret-left"></i>
                </div>
            </div>
            <div class="slideshow_arrow ss_move_right">
                <div class="rel">
                    <i class="fas fa-caret-right"></i>
                </div>
            </div>
        </div>
        <div id="about_us">
            <div class="about_column" id="about_ted">
                <h3>About TED</h3>
                <p>
                    TED is an annual event where some of the world's leading thinkers and doers are invited to share what they are most passionate about. "TED" stands for Technology, Entertainment, Design -- three broad subject areas that are, collectively, shaping our future. TED is owned by a nonprofit, nonpartisan foundation, and is devoted to spreading ideas, usually in the form of short, powerful talks (18 minutes or less).
                </p>
            </div>
            <div class="about_column" id="about_tedx">
                <h3>About TEDx</h3>
                <p>
                    Evolving out of the success of TED, TEDx was created in 2009 in the spirit of TED's mission, "ideas worth spreading." It empowers independent organizers to bring a TED-like experience under a free license granted by TED. Just like in TED conferences, ideas are spread in the TEDx conferences in the suite of short, carefully prepared talks, demonstrations and performances that are idea-focused, and cover a wide range of subjects to foster learning, inspiration and wonder – and provoke conversations that matter.
                </p>
            </div>
        </div>
    </div>
<?php
}
?>
