<?php
$GLOBALS['themeVari'] = "basic";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/tickets.js");
$GLOBALS['printPage'] = function()
{
    ?>
    <link rel="stylesheet" href="<? echo $GLOBALS['astLink'] ; ?>src/front/css/tickets.css">
    <div id="top_poster"></div><br>
    <div id="top_poster_two">
        <div class="left_bar">
            <h1 id="tedx_tix">TEDxShivNadarUniversity 2018</h1>
        </div>
        <div class="right_bar">
            <a class="nominate_a_speaker" target="_blank" href="https://goo.gl/forms/AqujR91MyT6aLD6n1">
                <i class="fas fa-external-link-alt"></i> BOOK NOW
            </a>
        </div>
        <hr/>
        <div class="left_bar">
            <span>18th November 2018</span><span><i class="fas fa-clock"></i> 9:00 to 18:00 </span><span> | </span><span><i class="fas fa-rupee-sign"></i> 1299 onwards</span>
        </div>
    </div><br>
    <div id="table_holder">
        <div class="resp_table">
            <div class="resp_row">
                <div class="resp_cell" id="bigger">
                    <h2>Pricing</h2>
                    <hr class="styled_hr">
                    <table style="width: 100%; table-layout: fixed">
                        <tr style="font-size: 15px;">
                            <td>Students</td>
                            <td>SNU Alumnus</td>
                            <td>Others</td>
                        </tr>
                        <tr style="font-size: 18px;">
                            <td><i class="fas fa-rupee-sign"></i>1299</td>
                            <td><i class="fas fa-rupee-sign"></i>1300</td>
                            <td><i class="fas fa-rupee-sign"></i>1700</td>
                        </tr>
                    </table>
                    <span id="chhotha_text" style="font-size: 12px;">*Transportation is available at extra cost</span>
                    <h2>Benefits</h2>
                    <hr class="styled_hr">
                    <div class="table_table">
                        <div class="table_row">
                            <div class="table_cell">
                                <img src="https://i.imgur.com/KiivR3l.jpg">
                                <hr class="styled_hr">
                                <h2>Multidisciplinary Speaker Line-up</h2>
                                <h3>Speakers from fields such as:</h3>
                                <ol>
                                    <li>Investigative journalism</li>
                                    <li>Historian and Heritage Guide</li>
                                    <li>Poetry</li>
                                    <li>Social Activism</li>
                                    <li>Fashion Design</li>
                                    <li>Stand-up comedy</li>
                                    <li>Investment Banking</li>
                                    <li>Many more to be revealed</li>
                                </ol>
                            </div>
                            <div class="table_cell">
                                <img src="https://i.imgur.com/XtSgEMJ.jpg">
                                <hr class="styled_hr">
                                <h2>Dazzling Performances</h2>
                                <h3>Performances at the event by:</h3>
                                <ol>
                                    <li>Jazz Artist</li>
                                    <li>Slam Poet</li>
                                    <li>Salsa Duo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="table_table">
                        <div class="table_row">
                            <div class="table_cell">
                                <img style="width: 100%; padding-bottom: 20px; margin-bottom: 10px;" src="https://i.imgur.com/BuKsSRr.jpg" />
                                <h3 style=" line-height: 125%; font-family: Helvetica,Arial,sans-serif; font-size: 20px; font-weight: normal; margin-top: 0; margin-bottom: 3px; text-align: left;">Customised<strong> Delegate Kit Bag</strong></h3><hr class="styled_hr">
                                <div style="text-align: left; font-family: Helvetica,Arial,sans-serif; font-size: 15px; margin-bottom: 0; margin-top: 3px; line-height: 135%;">
                                    <p>18 customised goodies (with collaborations including Doodle Collection, Dessert City and Brandless) hand-picked and packed in a customised bag.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="table_table">
                        <div class="table_row">
                            <div class="table_cell">
                                <img src="https://i.imgur.com/HwPQBZW.jpg">
                                <hr class="styled_hr">
                                <h2>Curated Food Menu</h2>
                                <h3>48 food items spread over 3 breaks:</h3>
                                <ol>
                                    <li>Refreshments</li>
                                    <li>Lunch</li>
                                    <li>Official Afterparty</li>
                                </ol>
                            </div>
                            <div class="table_cell">
                                <img src="https://i.imgur.com/wfjQOh9.jpg">
                                <hr class="styled_hr">
                                <h2>Engagement Beyond the Conference Hall</h2>
                                <h3>One - to - one speaker interaction</h3>
                                <h3>Access to pre-function area activities</h3>
                                <ol>
                                    <li>Story Theatre</li>
                                    <li>Audience created canvas painting</li>
                                    <li>Speaker expo zone</li>
                                    <li>Book exchange</li>
                                    <li>Conversation pillars</li>
                                    <li>Snap a picture, grab a print</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="table_table">
                        <div class="table_row">
                            <div class="table_cell">
                                <img style="width: 100%; padding-bottom: 20px; margin-bottom: 10px;" src="https://i.imgur.com/6N0edUa.jpg" />
                                <h3 style=" line-height: 125%; font-size: 20px; font-weight: normal; margin-top: 0; margin-bottom: 3px;">A TED-like journey of 23 days</h3><hr class="styled_hr">
                                <h2>Giveaways from:</h2>
                                <hr class="styled_hr">
                                <table style="width: 100%; table-layout: fixed; text-align: center; font-size: 12px; height: 42px;">
                                    <tbody>
                                    <tr style="height: 42px;">
                                        <td style="padding: 5px; height: 42px;"><span style="font-family: 'courier new',courier,monospace; font-size: 10pt;">Red Bull</span></td>
                                        <td style="padding: 5px; height: 42px;"><span style="font-family: 'courier new',courier,monospace; font-size: 10pt;">Cold Brew Coffee</span></td>
                                        <td style="padding: 5px; height: 42px;"><span style="font-family: 'courier new',courier,monospace; font-size: 10pt;">More to be revealed</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>An official attendee community, built through:</h2>
                                <hr class="styled_hr">
                                <table style="width: 100%; table-layout: fixed; text-align: center; font-size: 12px;">
                                    <tbody>
                                    <tr>
                                        <td style="padding: 5px; vertical-align: middle;"><span style="font-family: 'courier new',courier,monospace; font-size: 10pt;">Exclusive club events</span></td>
                                        <td style="padding: 5px; vertical-align: middle;"><span style="font-family: 'courier new',courier,monospace; font-size: 10pt;">Interactive meet-ups</span></td>
                                        <td style="padding: 5px; vertical-align: middle;"><span style="font-family: 'courier new',courier,monospace; font-size: 10pt;">Engagements through an attendee portal</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resp_cell" id="sidebar">
                    <h2>Find Us:</h2>
                    <hr class="styled_hr">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14021.728316462564!2d77.575363!3d28.5267298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x321412756718874c!2sShiv+Nadar+University!5e0!3m2!1sen!2sin!4v1538672499494" width="300" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div><br>
    <div class="terms_element">
        <div class="terms_element_header">
            <span class="terms_element_header_content">TERMS AND CONDITIONS</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="terms_element_content">
            <ol>
                <li>Each ticket permits one attendee</li>
                <li>There’s no age restriction for attending the conference</li>
                <li>No outside food is allowed in the conference area</li>
                <li>No alcohol and drugs are allowed in the conference area</li>
                <li>Tickets are non-refundable and non-transferable</li>
                <li>Transportation will be provided on request, and will be chargeable separately. The pickup and drop-off point will be the Botanical Garden Metro Station in Noida.</li>
                <li>Rights of admission reserved</li>
                <li>Tickets will be confirmed only upon successful payment of the ticket fee</li>
                <li>Attendees buying tickets under the Student and Alumni categories must present their relevant ID cards or documents on the day of the conference for verification purposes. Failure to do so will result in you having to pay the difference in ticket price for the Others category.</li>
            </ol>
        </div>
    </div>
    <?php
}
?>
