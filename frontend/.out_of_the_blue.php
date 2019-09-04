<?php
$GLOBALS['themeVari'] = "basic";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("");
$GLOBALS['printPage'] = function()
{
	?>
  <style>
  #top_bg_holder
  {
    width: 100%;
    margin-top: -2px;
  }
  #ootb_text
  {
    width: calc(100% - 40px);
    padding: 20px;
    text-align: justify;
    font-size: 20px;
  }
  @media screen and (min-width: 1010px)
  {
    #ootb_text
    {
      width: 960px;
      padding-left: calc(calc(50% - 500px) + 20px);
      padding-right: calc(calc(50% - 500px) + 20px);
    }
  }
  @@media screen and (max-width: 900px) {
    #top_bg_holder
    {
      min-height: 300px;
    }
  }
  </style>

  <img id="top_bg_holder" src="<? echo $GLOBALS['astLink'] ; ?>images/ootb.png">
  <div id="ootb_text">
    <p>
      Trying to bring together an event that stimulates minds and stirs conversations, we were in search of a concept that was symbolic to the subjectivity of our every feeling: to each his own victory as well as tragedy. TEDxShivNadarUniversity 2018 eventually found its creative theme surfing somewhere in the vastness of oceans, right out of the blue! The grandiosity of waves and their unpredictable yet transforming path is a motif of change. The perpetual ups and downs and the ability to provide as well as remove are the remarkable traits that drew us to the divinity of waves. We present to you the visual theme for this edition: #OutOfTheBlue
    </p>
  </div>
<?php
}
?>
