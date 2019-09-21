<?php
$GLOBALS['themeVari'] = "basic";
$GLOBALS['titleSub'] = $GLOBALS['siteMeta']['desc'];
$GLOBALS['jsInclude'] = array("https://maps.googleapis.com/maps/api/js?key=AIzaSyD3tbKk3MMoOkN7oturWjN1Dshtg2VcI_M&callback=initMap");
$GLOBALS['printPage'] = function()
{
	?>
  <style>
	body
	{
		text-align: center;
	}
	#contact_form
	{
		display: inline-block;
		max-width: 900px;
		width: calc(100% - 40px);
		padding: 20px 0;
		text-align: left;
	}
	#content
	{
	    background-color: #000000e8;
	}
	#left_holder
	{
		display: inline-block;
		vertical-align: middle;
	}
	#penpals_form
	{
		display: inline-block;
        box-sizing: border-box;
		padding: 50px 20px;
		text-align: right;
		vertical-align: middle;
	}
	#info_block
	{
        box-sizing: border-box;
		width: calc(50% - 5px);
        vertical-align: top;
        display: inline-block;
		min-height: 150px;
		padding: 20px;
        background-color: #000000;
        border: 5px solid #e62b1e;
		margin-top: 20px;
		position: relative;
	}
	input, textarea
	{
		width: calc(100% - 30px);
		padding: 10px 15px;
		font-size: 20px;
		margin: 20px 0;
		outline: none;
		border: none;
        background-color: #dedede;
        color: #000;
		border-radius: 4px;
        letter-spacing: 1px;
        font-weight: bold;
	}
	input::placeholder, textarea::placeholder
	{
		color: rgba(0,0,0,0.3);
        letter-spacing: 0;
        font-weight: normal;
	}
	label
	{
		font-size: 25px;
		margin: 10px 0;
		display: none;
	}
	button
	{
		padding: 15px;
		font-size: 20px;
		background-color: #dedede;
		color: #000;
		outline: none;
		border: none;
		border-radius: 2px;
        font-weight: bold;
	}
      .message
      {
          background-color: #dedede;
          color: black;
          padding: 10px;
          border-radius: 3px;
          margin: 20px 0;
          text-align: justify;
      }
  </style>
	<div class="page_title_block">
		<div class="page_title_cont">
			<span class="page_title_white">PENPALS</span>
            <p>A TEDxShivNadarUniversity original</p>
            <p>Every week till October, only a 100 people get a chance to connect to a Penpal within the campus. Random pairing, anonymity, handwritten letters & weekly delivery. </p>
		</div>
	</div>
	<div id="penpals_form">
        <?php if(isset($_GET["submitted"]))
            {?>
        <div class="message">
            <p>
                Thank you for registering! Our letter box is kept in D-Block. Please deposit your letters in the same. We request you to deposit your first letter by 11.59 PM on Wednesday (11 September),  after which we shall sort the letters for collection.
            </p>
            <p>
                You may collect your pen friend's letter on Thursday from the same area. We shall have a desk set up from 8-11 PM from where you can collect your letters.
            </p>
            <p>
                This cycle continues every week. Letters should be deposited by 11.59 PM on every Wednesday. And responses can be collected on Thursdays between 8 and 11 PM
            </p>
        </div>
        <?php } ?>
        <?php if(isset($_GET["invalid"]))
        {?>
            <div class="message message-red">
                <p>
                    Invalid Values! Please fill all the fields and try again!
                </p>
            </div>
        <?php } ?>
        <h1 style="color: white; text-align: left">How it works!</h1>
        <p style="color: white; text-align: justify">
            You write a letter to an anonymous pen-friend and drop it in our post-box kept in D-Block. You shall get paired up with another person randomly. We shall accept letters till 11.59 pm every Wednesday until October, following which we shall open the box and sort the letters. You may pick up letters addressed to you every Thursday between 8 to 11 pm from D Block.
        </p>
        <h1 style="color: white; text-align: left">Get Started:</h1>
        <p style="color: white; text-align: left">
            <ul  style="color: white; text-align: left">
            <li>Register below</li>
            <li>While choosing a username, please do not include your name in the same. It shall help in maintaining anonymity.</li>
            <li>Write the first letter, sign the letter with your username only, and drop it in the letterbox</li>
            </ul>
        </p>
        <h1 style="color: white; text-align: left">So, fill the form!</h1>
		<form action="/action.php?a=penpals_submit" id="form_contact_form" method="post">
			<input id="input_username" name="input_username" type="text" placeholder="Username"/><br>
			<input id="input_password" name="input_password" type="text" placeholder="********"/><br>
            <p style="color: white; text-align: justify; font-weight: bold;">
                Keep in mind to not make your usernames or passwords identifiable!
            </p>
			<button>Register</button>
		</form>
	</div>
<?php
}
?>
