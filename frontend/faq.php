<?php
$GLOBALS['themeVari'] = "home";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/faq.js");
$GLOBALS['printPage'] = function()
{
	?>
  <link rel="stylesheet" href="<?php echo $GLOBALS['astLink'] ; ?>src/front/css/faq1.css">
	<div class="page_title_block">
		<div class="page_title_cont">
			<span class="page_title_white">Frequently</span><span class="page_title_white"> Asked</span><span class="page_title_red"> Questions</span>
      <p>
        Don’t see an answer to your question? Email us at <a target="_blank" href="mailto:tedx.club@snu.edu.in">tedx.club@snu.edu.in</a>
      </p>
		</div>
	</div>
  <div id="faq_container">
    <div class="faq_element">
      <div class="faq_element_header">
        <span class="faq_element_header_content">Q: What is TED and TEDx? How are they different?</span><i class="fas fa-caret-down"></i>
      </div>
      <div class="faq_element_content">
        <p>
          A: Read <a target="_blank" href="<?php echo $GLOBALS['host'] ; ?>about">here</a>.
        </p>
      </div>
    </div>
    <div class="faq_element">
      <div class="faq_element_header">
        <span class="faq_element_header_content">Q:  When and where will TEDxShivNadarUniversity take place this year? How long will it last, and will there be breaks in between?</span><i class="fas fa-caret-down"></i>
      </div>
      <div class="faq_element_content">
        <p>
        TEDxShivNadarUniversity 2019 is scheduled for Sunday, November 17, 2019. It will be held on our <a target="" href="<?php echo $GLOBALS['host'] ;?>contact"> university campus.</a> The conference shall begin at 9 am and will proceed until 6 pm with breaks for refreshments and lunch in between. This will be followed by high-tea. We shall also have performances in between the talks.
        </p>
      </div>
    </div>
   <div class="faq_element">
      <div class="faq_element_header">
        <span class="faq_element_header_content">Q: Where can I watch the talks from the previous conferences?</span><i class="fas fa-caret-down"></i>
      </div>
      <div class="faq_element_content">
        <p>
					A: <br>
          <a target="_blank" href="<?php echo $GLOBALS['host'] ;?>pastc/2016">TEDxShivNadarUniversity 2016</a><br>
          <br>
          <a target="_blank" href="<?php echo $GLOBALS['host'] ;?>pastc/2017">TEDxShivNadarUniversity 2017</a><br>
          <br>
          <a target="_blank" href="<?php echo $GLOBALS['host'] ;?>pastc/2018">TEDxShivNadarUniversity 2018</a><br>
        </p>
      </div>
    </div>
    <div class="faq_element">
      <div class="faq_element_header">
        <span class="faq_element_header_content">Q: Are you employed by TED?</span><i class="fas fa-caret-down"></i>
      </div>
      <div class="faq_element_content">
        <p>A: No. We only operate under a license from TED. The ‘x’ in TEDx implies that we are an independently organised conference, only operating under a license from TED. The team at TEDxShivNadarUniversity is simply a group of passionate students who have come together to support the philosophy of “Ideas Worth Spreading”. We are only volunteers and neither do we hold any kind of paid assignments with TED nor do they supervise any aspect of the conference.
        </p>
      </div>
    </div>
    <div class="faq_element">
      <div class="faq_element_header">
        <span class="faq_element_header_content">Q: Can people from outside Shiv Nadar University attend the conference?</span><i class="fas fa-caret-down"></i>
      </div>
      <div class="faq_element_content">
        <p>A: Yes, absolutely. TEDxShivNadarUniversity is not only limited to students of Shiv Nadar University. Anyone with an open and curious mind can buy a ticket to attend the event.</p>
      </div>
    </div>
    <div class="faq_element">
      <div class="faq_element_header">
        <span class="faq_element_header_content">Q: How and when can I buy tickets for the conference? </span><i class="fas fa-caret-down"></i>
      </div>
      <div class="faq_element_content">
        <p>A: Tickets will go up for sale on our website. This year the first phase of tickets will go on sale on October 16th.</p>
      </div>
    </div>
    <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Why is there a cost to attend TEDxShivNadarUniversity?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: TEDxShivNadarUniversity is a non-profit event that relies on the support of our partners and the selfless contributions of our volunteers. One of our goals is to deliver an event that is on par with TED and TEDx Conferences around the world. Unfortunately, the contributions of our partners cannot cover the entire cost of the event. Production, decor, food, marketing and transportation have significant costs which we need to cover. Hence we sell tickets to the event.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Are tickets refundable or transferable?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: Unfortunately, tickets once purchased cannot be refunded or transferred. If however TEDxShivNadarUniversity cancels or postpones the conference it will provide a 100% refund of the ticket purchase price. If, for unavoidable circumstances, you are unable to attend the conference, then write to us at tedx.club@snu.edu.in and suggest an attendee for your ticket.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: What does the ticket cost include?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: Apart from entry to the conference area with multiple activities and displays in the pre-functionary area, the ticket also provides for your food and refreshments, your delegate kit, interaction with speakers and partners and dignitaries, and a certificate for attending the conference. It also includes the costs and conveniences for any attendee exclusive events. 
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Is there any age restriction on attendees of the conference?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: No. There are no binding age restrictions against attending a TEDx event. However, our personal experience tells us that only individuals above the age of 15 can fully appreciate the contents of the talks and grasp the gravity of the ideas being presented.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Is there any provision for transportation to and from the event venue for attendees from Delhi-NCR?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: Transportation will be provided on request. The pickup and drop-off point shall be the Botanical Garden Metro Station in Noida. Reach out to us at tedx.club@snu.edu.in.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: How can I be a speaker at the conference?
        </span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: If you have a compelling idea to share, we would love to have you on our stage. You only have to fill up our <a target="_blank" href="https://goo.gl/forms/Vy9Y4QqQomFU3wpv2">speaker nomination form</a> and if your idea intrigues us, we shall get in touch with you soon. You need not be a celebrity or a CEO raking in millions every year. You need only have a powerful idea that the world absolutely needs to hear.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Can I nominate someone to speak at the conference?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: At TEDxShivNadarUniversity, we search year-round for speakers who will inform and inspire, surprise and delight. If you feel that you know someone who belongs on the TEDxShivNadarUniversity stage, we would love to hear from you. Kindly use this <a target="_blank" href="https://goo.gl/forms/Vy9Y4QqQomFU3wpv2">speaker nomination form</a> to help us identify unique ideas to spread.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Does TEDxShivNadarUniversity pay its speakers and performers?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: Neither TED nor any TEDx events pay their presenters. We only provide transportation, accommodation and food.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Are the talks at TEDxShivNadarUniversity curated?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: Yes. All our speakers go up on stage only after a rigorous curation process. A specially assigned curation team works with the speakers months in advance of the conference to curate the talk and maintain a certain standard of quality and to comply with the guidelines prescribed by TED.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: How is a TEDx conference different from any other conference (like JOSH talks or INK talks)?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: A TED Talk is significantly different from a lecture or a life story. It is one’s most compelling idea, wrapped in a powerful talk of up to 18 minutes. And a great, well-formed idea isn’t just a story or a list of facts. A good idea takes certain evidence or observations and draws a larger conclusion.
          </p>
          <p>A TEDx conference brings people from diverse backgrounds - professional, ethnic, economic, and academic, to one platform, to discuss, inspire, and enlighten. Here we are talking not only about the speakers for the conference, but also the attendees, partners, media representatives and academicians who grace the conference. Break times are avenues for all these people to interact and build their own network. Speakers, audience members, sponsors, media partners, organizers mingle together during the refreshments and lunch break. Discussions - some impassioned, formal, some humorous and lighthearted ensue throughout the lounge area, highlighting yet another reason why TED and TEDx conferences offer an experience which is different from that of other conferences.
        </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: I have never attended a TEDx conference before. What should I expect?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: Juanita Wheeler <a target="_blank" href="http://tedxbrisbane.com.au/11-things-i-wish-i-knew-before-attending-my-first-ever-tedx/">answered it best</a>, so why don’t we defer to her.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: How long does the conference last? Will there be breaks in between the talks?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: The conference will begin at 9 am and will proceed until 6 pm with breaks for refreshments and lunch in between. This will be followed by high-tea. We shall also have performances in between the talks.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: What is the theme for the conference?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>For the first time in our history, we have a theme for our conference. The theme is Blindspots. Read more about it here (insert hyperlink).
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: How can my company get involved as a partner or sponsor of the conference?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>A: If you or your company is interested in becoming a partner or sponsor of the event, kindly fill up this <a target="_blank" href="https://goo.gl/forms/XZBvafK8aLn3DBDI3">form</a>, and we will get in touch with you soon.
          </p>
        </div>
      </div>
      <div class="faq_element">
        <div class="faq_element_header">
          <span class="faq_element_header_content">Q: Is there any way to receive regular updates and news about your conference?</span><i class="fas fa-caret-down"></i>
        </div>
        <div class="faq_element_content">
          <p>You can follow us on our social media handles: <a target="_blank" href="https://www.instagram.com/tedxshivnadaruniversity/">Instagram</a>, <a target="_blank" href="https://www.facebook.com/tedxshivnadaruniversity/">Facebook</a> and <a target="_blank" href="https://twitter.com/tedxshivnadaru?lang=en">Twitter</a>.
          </p>
        </div>
      </div>

  </div>
<?php
}
?>
