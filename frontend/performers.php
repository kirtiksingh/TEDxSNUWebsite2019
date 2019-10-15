<?php
$GLOBALS['themeVari'] = "home";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/Speakers.js");
$GLOBALS['printPage'] = function () {
    ?>
    <link rel="stylesheet" href="<?php echo $GLOBALS['astLink']; ?>src/front/css/Speakers1.css">
    <div class="page_title_block">
        <div class="page_title_cont">
            <span class="page_title_white" style="font-size: 18px; color: #E53293">Stars Of The Conference</span><br>
            <span class="page_title_red">OUR PERFORMERS</span>
            <p>
                TEDxShivNadarUniversity finds its soul in its diverse speaker roster. The conference is the celebration
                of the groundbreaking ideas of these thinkers, innovators, icons and mavericks.
            </p>
            </div>
    </div>
    <div id="content">
        <div id="speaker_carousel">
            <div class="rel">
                <div id="speaker_carousel_cont">
                    <div class="rel">
                        <div class="speaker_element" data-speaker-identifier="">
                            <div class="rel">
                                <div class="speaker_element_background"
                                     style="background-image: url(<?php echo $GLOBALS['astLink'] ; ?>images/speaker_19/performers/chizai.png)">
                                </div>
                                <div class="speaker_element_small_desc">
                                    <h2>Chizai</h2><br>
                                    <h3>Band</h3>
                                </div>
                                <div class="speakers_element_content">
                                    <div class="rel">
                                        <i class="notch_arrow fas fa-sort-up"></i>
                                        <div class="speakers_element_content_andar_ka_content">
                                            <i class="fas fa-times cross_it"></i>
                                            <h1>Chizai</h1>
                                            <h2>Band</h2>
                                            <p>
                                                "I feel the tide turning my way<br>
                                                My tired feet tell me<br>
                                                All I need is some loving<br>
                                                Maybe all I need is homecoming"<br>
                                            </p>
                                            <p>
                                                What started as a two friends busking on Delhi streets, Chizai has grown into a family of four now. With their unorthodox blend of instruments, featuring a cajon, trombone, trumpet, bass, guitars, ukuleles, and keyboard, they are constantly experimenting with their sound. Cheering the spirit of life and good vibes and spreading love and happiness, their innovation, experimentations, and reinvention has propelled them to big stages like The Piano Man Jazz Club, Hard Rock Cafe and several music festivals.
                                                Watch Chizai bring their unique electro-acoustic music to the TEDxShivNadarUniversity stage, live on the 17th of November.
                                            </p>
                                            <div class="speaker_social_media">
                                                <a href="https://www.facebook.com/Chizailive/?fref=ts" target="_blank"><i
                                                            class="fab fa-facebook"></i></a>
                                                <a href="https://www.instagram.com/chizai_live/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>            
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="speaker_element" data-speaker-identifier="">
                            <div class="rel">
                                <div class="speaker_element_background"
                                style="background-image: url(<?php echo $GLOBALS['astLink'] ; ?>images/speaker_19/performers/Slampoetry_Akarsh9.png)">
                                </div>
                                <div class="speaker_element_small_desc">
                                    <h2>Ishaan Chawdhary</h2><br>
                                    <h3>Slam Poet</h3>
                                </div>
                                <div class="speakers_element_content">
                                    <div class="rel">
                                        <i class="notch_arrow fas fa-sort-up"></i>
                                        <div class="speakers_element_content_andar_ka_content">
                                            <i class="fas fa-times cross_it"></i>
                                            <h1>Ishaan Chawdhary</h1>
                                            <h2>Slam Poet</h2>
                                            <p>
                                                "He is an Adele song, minus the perfect eyeliner"
                                            </p>
                                            <p>
                                                A final year student of English Honours by day, and a debonair performer by night, Ishaan Chawdhary has moved many with his words. One of the co-founders of the performance
                                                based poetry collective, Slip of Tongue, he has been performing poetry for over 3 years. At the young age of 16, he won the Great Indian Film and Literature Festival's annual slam, and has never looked back since. A regular performer at Kommune's Kommuneity Weekends, he weaves together words that touch corners of your mind you never even knew existed.
                                            </p>
                                            <p>
                                                A prolific public speaker and debater, he writes poetry as a medium of self-exploration and discovery, as well as for social change and awareness. Catch him live at TEDxShivNadarUniversity on November 17.
                                            </p>
                                            <div class="speaker_social_media">
                                                <a href="https://www.instagram.com/echothroughthecosmos/?hl=en" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="speaker_element anonymous" data-speaker-identifier="">
                                <div class="rel">
                                    <div class="speaker_element_background"
                                        style="background-image: url()">
                                    </div>
                                    <div class="speaker_element_small_desc">
                                        <h2>Coming Soon</h2><br>
                                        <h3>To Be Announced</h3>
                                    </div>
                                    <div class="speakers_element_content">
                                        <div class="rel">
                                            <i class="notch_arrow fas fa-sort-up"></i>
                                            <div class="speakers_element_content_andar_ka_content">
                                                <i class="fas fa-times cross_it"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
