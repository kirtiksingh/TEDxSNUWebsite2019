<?php
$GLOBALS['themeVari'] = "home";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/partners.js");
$GLOBALS['printPage'] = function()
{
	?>
	<link rel="stylesheet" href="<?php echo $GLOBALS['astLink'] ; ?>src/front/css/partners.css">
	<div class="page_title_block">
		<div class="page_title_cont">
            <span class="page_title_white" style="font-size: 18px; color: #E53293">We're grateful to</span><br>
			<span class="page_title_white">OUR</span><span class="page_title_red"> PARTNERS</span>
			<p>
				TEDxShivNadarUniversity is made possible by the support of our generous partners. With their vision and commitment we are able to deliver one of the biggest TEDx conferences in the Delhi NCR region.
			</p>
		</div>
	</div>
  <div id="partner_grid">
      <!-- <h1>Title Sponsor</h1>
		<img class="partner-logo size_title" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/dlf_2.jpg">
      	<h1>Associate Sponsors</h1>
      <div class="partner_grid assoc">
		<img class="partner-logo" style="padding: 20% 20%" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cisco_1.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cog_1.jpg">
      </div> -->
      <!-- <h1>Sponsors</h1>
      <div class="partner_grid">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cppl.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cl.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/tachser.jpg">
      </div> -->
      <h1>Partners</h1>
      <div class="partner_grid">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/POPMAN.jpg">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/redwolf.png">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/Sleepy OWl.jpg">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/SUSTAINITY_LOGO-01.jpg">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/peppy.png">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/tss_logo.jpg">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/smaash.png">
      </div>

		<h1>Media Partners</h1>
      <div class="partner_grid">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/ATKT-eng.png">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/DUExpress_logo.png">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/ed.png">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/social-rush logo.jpg">
		<img class="partner-logo" src="<?php echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/socultures logo.jpg">
      </div>


	
	</div>
<?php
}
?>
