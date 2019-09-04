<?php
$GLOBALS['themeVari'] = "basic";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("src/front/js/partners.js");
$GLOBALS['printPage'] = function()
{
	?>
	<link rel="stylesheet" href="<?php echo $GLOBALS['astLink'] ; ?>src/front/css/partners.css">
	<div class="page_title_block">
		<div class="page_title_cont">
			<span class="page_title_white">OUR</span><span class="page_title_red"> PARTNERS</span>
			<p>
				TEDxShivNadarUniversity is made possible by the support of our generous partners. With their vision and commitment we are able to deliver one of the biggest TEDx conferences in the Delhi NCR region.
			</p>
		</div>
	</div>
  <div id="partner_grid">
      <h1>Title Sponsor</h1>
		<img class="partner-logo size_title" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/dlf_2.jpg">
      	<h1>Associate Sponsors</h1>
      <div class="partner_grid assoc">
		<img class="partner-logo" style="padding: 20% 20%" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cisco_1.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cog_1.jpg">
      </div>
      <h1>Sponsors</h1>
      <div class="partner_grid">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cppl.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/cl.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/tachser.jpg">
      </div>
      <h1>Partners</h1>
      <div class="partner_grid">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/brandless.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/brewhouse_1.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/madoverprint.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/freshbrewco.jpeg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/popman.jpeg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/Snackexperts.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/do.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/teatrunk.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/thesouledstore.jpeg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/woodpecks.jpeg">
        <img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/youngchocolate.jpeg">
        <img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/hobby.jpg">
      </div>

		<h1>Media Partners</h1>
      <div class="partner_grid">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/afflatus.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/ATKT.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/campusdrift.jpeg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/duexpress.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/dubeat.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/dubulletin.jpeg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/festsamachar.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/inclusiveink.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/NISAU.jpeg">
        <img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/NISU.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/socultures.jpeg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/thecitizen.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/thesocialrush.png">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/du_updates.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/aeva.jpg">
		<img class="partner-logo" src="<?echo $GLOBALS['astLink'] ; ?>images/partners/mediapartners/ttv.png">
      </div>


	
	</div>
<?php
}
?>
