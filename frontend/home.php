<?php
$GLOBALS['themeVari'] = "home";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js", "src/front/js/home.js");
$GLOBALS['printPage'] = function()
{
	?>
	<link rel="stylesheet" href="<?php echo $GLOBALS['astLink'] ; ?>src/front/css/home.css">

    <style>
        #hidderReveal
        {
            position: absolute;
            height: 200px;
            width: 200px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            overflow: hidden;
            top: 50%;
            left: 50%;
        }
        #hidderReveal > .page_title_cont
        {
            position: absolute;
            top: -100%;
            left: -100%;
            padding: 0 !important;
            transform: translate(calc(50vh - 50%), calc(50vw - 50%));
        }
    </style>
    <div id="slideshow_holder">
        <div class="rel">
            <div id="slideshow_reel">
                <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                    <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SS_Image00001.jpg">
                </a>
                <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                    <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SS_Image00002.jpg">
                </a>
                <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                    <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SS_Image00003.jpg">
                </a>
                <a class="slideshow_element" href="<?php echo $GLOBALS['host'] ; ?>pastc/2018">
                    <img style="width: 100%;" src="<?php echo $GLOBALS['astLink'] ; ?>images/home_page_ss/SS_Image00004.jpg">
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
<?php
}
?>
