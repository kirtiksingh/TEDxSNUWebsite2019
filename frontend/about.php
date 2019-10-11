<?php
$GLOBALS['themeVari'] = "home";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/about.js", "src/front/js/jquery.imageScroll.min.js");
$GLOBALS['printPage'] = function () {
    ?>
    <link rel="stylesheet" href="<?php echo $GLOBALS['astLink']; ?>src/front/css/about.css">
    <div class="page_title_block">
        <div class="page_title_cont">
            <span class="page_title_white" style="font-size: 18px; color: #E53293">Ideas Worth Spreading</span><br>
            <span class="page_title_red">ABOUT</span>
            <p>
                TED and TEDx are two terms which are vastly different, yet most confused. TEDx conferences are
                independently organised by local volunteers under a license from TED.
            </p>
        </div>
    </div>
    <div id="content">
        <div class="about_tedx">
            <h3><span class="span-white">About</span> TEDx<span class="span-white">ShivNadarUniversity</span></h3>
            <p>
                TEDxShivNadarUniversity is one of the flagship TEDx events in the Delhi-NCR region, where “x” means:
                independently organized TED event. At TEDxShivNadarUniversity live speakers and entertainers spark deep
                discussion and connection in our audience. TEDxShivNadarUniversity unites the community of Shiv Nadar
                University through the power of ideas. Staffed and run entirely by students, we aim to showcase the
                biggest ideas in the University on the world's biggest platform. The TED Conference provides general
                guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.
            </p>
        </div>
        <br>
        <div class="about_tedx">
            <h3><span class="span-white">About</span> TED</h3>
            <p>
                TED is an annual event where some of the world's leading thinkers and doers are invited to share what
                they are most passionate about. "TED" stands for Technology, Entertainment, Design -- three broad
                subject areas that are, collectively, shaping our future. TED is owned by a nonprofit, nonpartisan
                foundation, and is devoted to spreading ideas, usually in the form of short, powerful talks (18 minutes
                or less). The diverse audience of CEOs, scientists, creatives, philanthropists is almost as
                extraordinary as the speakers, who have included Bill Clinton, Bill Gates, Bono and Paul Simon, Shah
                Rukh Khan, Elon Musk, Sir Ken Robinson. Everything the organization does— from Conferences to projects
                sparked by the TED Prize, from the TED book series to the TED-Ed lesson series — is driven by this same
                very goal of making great ideas accessible!
            </p>
        </div>
        <br>
        <div class="about_tedx">
            <h3><span class="span-white">About</span> TEDx</h3>
            <p>
                Evolving out of the success of TED, TEDx was created in 2009 in the spirit of TED's mission, "ideas
                worth spreading." It empowers independent organizers to bring a TED-like experience under a free license
                granted by TED. Just like in TED conferences, ideas are spread in the TEDx conferences in the suite of
                short, carefully prepared talks, demonstrations and performances that are idea-focused, and cover a wide
                range of subjects to foster learning, inspiration and wonder – and provoke conversations that matter.
                Each conference is planned independently on a community-by-community basis, with an aim of enriching the
                local community. In the words of the curator of TED, Chris Anderson, “Officially, the ‘x’ in TEDx stands
                for independently organized TED event – but it’s more of a TED multiplied. It’s been the force that has
                taken TED across the planet and seeded all of these communities.”
            </p>
        </div>
        <br>
    </div>


    <?php
}
?>
