<?php
$GLOBALS['themeVari'] = "basic";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/it_us.js");
$GLOBALS['printPage'] = function()
{
    ?>
    <style>
        .team_thumb_img p
        {
            text-align: center !important;
        }
    </style>
    <link rel="stylesheet" href="<?php echo $GLOBALS['astLink'] ; ?>src/front/css/meet_the_team2.css">
    <div class="page_title_block">
        <div class="page_title_cont">
            <span class="page_title_white">MEET</span><span class="page_title_red"> THE TEAM</span>
            <p>
                TEDxShivNadarUniversity is organised by a core team of dedicated volunteers – the changemakers and optimists, the community builders and creatives.
            </p>
        </div>
    </div>
    <div class="team_thumb_img big">
        <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Allteams1.jpg">
        <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Allteam2.jpg">
        <!--<br>
        The Team-->
    </div>
    <div id="meet_the_team_grid">
        <div class="rel">
            <h1 style=" background-color: #000; color: #FFF; font-size: 30px; padding: 10px 30px; text-align: left;">The Teams</h1>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Core1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Core1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Core2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Core2.jpg">
                Core<br>
                <p>
                </p>
                <div>
                    <div class="tem_members">
                        <div>Parth Ahuja</div>
                        <div class="designations">Lead Organiser</div>
                    </div>
                    <div class="tem_members">
                        <div>Kartikey Sahu</div>
                        <div class="designations">Co-Organiser & Licensee</div>
                    </div>
                    <div class="tem_members">
                        <div>Manvi Mehra</div>
                        <div class="designations">Curator</div>
                    </div>
                    <div class="tem_members">
                        <div>Manas A. Johri</div>
                        <div class="designations">Executive Producer</div>
                    </div>
                    <div class="tem_members">
                        <div>Inaayat Sachdev</div>
                        <div class="designations">Creative Director</div>
                    </div>
                    <div class="tem_members">
                        <div>Sarvam Goel</div>
                        <div class="designations">Co-Head of Finance</div>
                    </div>
                    <div class="tem_members">
                        <div>Niharika Satish</div>
                        <div class="designations">Head of Sponsorships</div>
                    </div>
                </div>
            </div><br>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Website1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Website1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Website2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Website2.jpg">
                Website<br>
                <p>
                    This team is headed by Sparsh
                </p>
                <div>
                    <div class="tem_members">
                        <div>Sparsh Ailawadi</div>
                    </div>
                    <div class="tem_members">
                        <div>Sparsh Agarwalla</div>
                    </div>
                    <div class="tem_members">
                        <div>Anant Bhasin</div>
                    </div>
                </div>
            </div>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Sponsorship1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Sponsorship1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Sponsorship2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Sponsorship2.jpg">
                Sponsorships and Partnerships<br>
                <p>
                    This team comprises the Sponsorships and Partnerships departments. The partnerships wing is headed by Shivika, and the sponsorships wing is headed by Niharika
                </p>
                <div>
                    <div class="tem_members">
                        <div>Meera Harish</div>
                    </div>
                    <div class="tem_members">
                        <div>Ishvam Jindal</div>
                    </div>
                    <div class="tem_members">
                        <div>Sargam Palod</div>
                    </div>
                    <div class="tem_members">
                        <div>Shyam Mohan</div>
                    </div>
                    <div class="tem_members">
                        <div>Shivika Kumar</div>
                    </div>
                    <div class="tem_members">
                        <div>Niharika Satish</div>
                    </div>
                    <div class="tem_members">
                        <div>Abhinav Keshri</div>
                    </div>
                </div>
            </div>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_PFA+Finance1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/PFA+Finance1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_PFA+Finance2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/PFA+Finance2.jpg">
                Production and Finance<br>
                <p>
                    This team comprises the Production and Finance departments. The production team is headed by Manas, and the finance team is co-headed by Sarvam, Adhithya and Anant.
                </p>
                <div>
                    <div class="tem_members">
                        <div>Kartikey Sahu</div>
                    </div>
                    <div class="tem_members">
                        <div>Sarvam Goel</div>
                    </div>
                    <div class="tem_members">
                        <div>Adhithya Balasubramanian</div>
                    </div>
                    <div class="tem_members">
                        <div>Vignesh Raghunathan</div>
                    </div>
                    <div class="tem_members">
                        <div>Isha Shrivastava</div>
                    </div>
                    <div class="tem_members">
                        <div>Manas A. Johri</div>
                    </div>
                    <div class="tem_members">
                        <div>Kritika Dixit</div>
                    </div>
                    <div class="tem_members">
                        <div>Anoushka Bhandari</div>
                    </div>
                    <div class="tem_members">
                        <div>Inaayat Sachdev</div>
                    </div>
                    <div class="tem_members">
                        <div>Parth Ahuja</div>
                    </div>
                    <div class="tem_members">
                        <div>Meera Harish</div>
                    </div>
                    <div class="tem_members">
                        <div>Anant Garg</div>
                    </div>
                </div>
            </div>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Marketing1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Marketing1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Marketing2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Marketing2.jpg">
                Marketing<br>
                <p>
                    This team is headed by Siri and Sanjana
                </p>
                <div>
                    <div class="tem_members">
                        <div>Jai Malhotra</div>
                    </div>
                    <div class="tem_members">
                        <div>Anoushka Ananth</div>
                    </div>
                    <div class="tem_members">
                        <div>Anirudh Kaushik</div>
                    </div>
                    <div class="tem_members">
                        <div>Ayush Sudarshan</div>
                    </div>
                    <div class="tem_members">
                        <div>Sai Siri Gurram</div>
                    </div>
                    <div class="tem_members">
                        <div>Kritika Dixit</div>
                    </div>
                    <div class="tem_members">
                        <div>Sanjana Sood</div>
                    </div>
                </div>
            </div>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Creative1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Creative1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Creative2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Creative2.jpg">
                Creative<br>
                <p>
                    This team comprises the Digital Design team, Art and Decor team, and Photography and Videography team. Inaayat is the Creative Director. The digital design team is headed by Vicram and Vidur, and the art and decor team is headed by Anoushka and Isha.
                </p>
                <div>
                    <div class="tem_members">
                        <div>Sai Ram Ved</div>
                    </div>
                    <div class="tem_members">
                        <div>Vidur Mithal</div>
                    </div>
                    <div class="tem_members">
                        <div>Vicram V</div>
                    </div>
                    <div class="tem_members">
                        <div>Sahar Habib</div>
                    </div>
                    <div class="tem_members">
                        <div>Devanshi Ghildiyal</div>
                    </div>
                    <div class="tem_members">
                        <div>Shubham Kejriwal</div>
                    </div>
                    <div class="tem_members">
                        <div>Tanishq Seth</div>
                    </div>
                    <div class="tem_members">
                        <div>Shail Yadav</div>
                    </div>
                    <div class="tem_members">
                        <div>Isha Shrivastava</div>
                    </div>
                    <div class="tem_members">
                        <div>Inaayat Sachdev</div>
                    </div>
                    <div class="tem_members">
                        <div>Anoushka Bhandari</div>
                    </div>
                    <div class="tem_members">
                        <div>Radhika Kumar</div>
                    </div>
                    <div class="tem_members">
                        <div>Muskan Agarwal</div>
                    </div>
                </div>
            </div>
            <div class="team_thumb_img">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Curation1.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Curation1.jpg">
                <img src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/thumbs/Small_Curation2.jpg" data-src="<?php echo $GLOBALS['astLink'] ; ?>images/team_pictures/large/Curation2.jpg">
                Content and Curation<br>
                <p>
                    This team is headed by Manvi
                </p>
                <div>
                    <div class="tem_members">
                        <div>Anirudh Jay Kumar</div>
                    </div>
                    <div class="tem_members">
                        <div>Narjis Naqvi</div>
                    </div>
                    <div class="tem_members">
                        <div>Mann Gupta</div>
                    </div>
                    <div class="tem_members">
                        <div>Vignesh Raghunathan</div>
                    </div>
                    <div class="tem_members">
                        <div>Adil Gazder</div>
                    </div>
                    <div class="tem_members">
                        <div>Sparsh Agarwalla</div>
                    </div>
                    <div class="tem_members">
                        <div>Atishay Jain</div>
                    </div>
                    <div class="tem_members">
                        <div>Manvi Mehra</div>
                    </div>
                    <div class="tem_members">
                        <div>Nishtha Nayar</div>
                    </div>
                    <div class="tem_members">
                        <div>Pratiksha Sharma</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
