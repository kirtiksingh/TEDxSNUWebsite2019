<?php
$GLOBALS['themeVari'] = "basic";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'] - "Join The Team";
$GLOBALS['jsInclude'] = array();
$GLOBALS['printPage'] = function()
{
    ?>
    <link rel="stylesheet" href="<? echo $GLOBALS['astLink'] ; ?>src/front/css/join.css">
    <div class="page_title_block">
        <div class="page_title_cont">
            <span class="page_title_white">JOIN THE </span><span class="page_title_red">TEAM</span>
            <p>
                Below, you will find the tasks that are associated with the various teams that work together for the conference, and the links to apply to join the same
            </p>
        </div>
    </div>
    <div class="teams_cont">
        <div class="team_cont">
            <h2>Content and Curation</h2>
            <span>This team works directly with the speakers to curate their talks for the conference</span><br>
            <a href="https://forms.gle/u6QLXHB7hw4eeHrj6" target="_blank">APPLY</a>
        </div>
        <div class="team_cont">
            <h2>Marketing</h2>
            <span>This team is in charge of generating hype for the conference all around Delhi-NCR</span>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeqVFgabmqERSTpuCOZJ9qMIdgcrO0zlYQj7BI_cNk84VFNVg/viewform?vc=0&c=0&w=1" target="_blank">APPLY</a>
        </div>
        <div class="team_cont">
            <h2>Sponsorship</h2>
            <span>This team is in charge of ensuring sufficient resources for the conference</span>
            <a href="https://forms.gle/DgLwWi4Czpq1Piiq9" target="_blank">APPLY</a>
        </div>
        <div class="team_cont">
            <h2>Digital Design</h2>
            <span>This team makes all the beautiful posters and banners that you see on our social media</span>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd7RTyIqAhNleeIkKEBsvH7hTeS0c-554fSQWd2roJb0EbBXw/viewform" target="_blank">APPLY</a>
        </div>
        <div class="team_cont">
            <h2>Art and Decor</h2>
            <span>This team works on all the amazing physical installations and the grand stage</span>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSedZCUotXlI-_VmKKJTprcoY36d01UxKrVXLYuYWa2mjj9_mA/viewform" target="_blank">APPLY</a>
        </div>
        <div class="team_cont">
            <h2>Videography</h2>
            <span>This team makes all the amazing trailers, aftermovies and behind the scenes videos</span>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfD6EHwkrah0L9Lfk6aeP9yY83m5x0NqfEDWfg7sPFoKsVQ-Q/viewform?vc=0&c=0&w=1" target="_blank">APPLY</a>
        </div>
        <div class="team_cont">
            <h2>Website Development</h2>
            <span>This team maintains the website of the conference</span>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScUYzV9CVLiu6zcnmCr9STH21YJqLM2FeRb-LEIfJ5BFlZ-hA/viewform" target="_blank">APPLY</a>
        </div>
        <p>While we do not need any professional experience, as a rule, we do expect hard work, enthusiasm, and zeal from you. Once you have been selected based on your answers in the form, you will be put through a round of personal interviews to get to know you better. If you do get selected to be a part of the organising team, you will be privy to work with amazing speakers whose ideas are significant in creating a change in this world and its people, and industry-leading companies, consenting to be our partners. So, please be courageous when you fill the form.</p>
        <h3>*Forms shall remain open until 11.59 pm on August 4.</h3>
    </div>
    <?php
}
?>
