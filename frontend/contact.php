<?php
$GLOBALS['themeVari'] = "home";
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
		width: 100%;
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
	#form_contact_form
	{
		display: inline-block;
        box-sizing: border-box;
		padding-left: 20px;
		text-align: right;
		width: calc(50% - 5px);
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
        border: 5px solid #4d2a7c;
		margin-top: 20px;
		position: relative;
	}
	input, textarea
	{
		width: 100%;
		padding: 10px 15px;
		font-size: 20px;
		margin: 20px 0;
		outline: none;
		border: none;
		background-color: #000000;
		border-radius: 1px;
        border-bottom: 5px solid rgba(0,0,0,0);
		color: #FFFFFF;
        letter-spacing: 1px;
        font-weight: bold;
	}
	input::placeholder, textarea::placeholder
	{
		color: rgba(255,255,255,0.3);
        letter-spacing: 0;
        font-weight: normal;
	}
    input:focus, textarea:focus
    {
        border-color: #4d2a7c;
    }
    input:valid, textarea:valid
    {
        border-color: #4d2a7c;
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
		background-color: #000;
		color: #FFF;
		outline: none;
		border: none;
		border-radius: 2px;
        font-weight: bold;
        border-bottom: 5px solid #4d2a7c;
	}
	.info_block_row
	{
		width: 100%;
		box-sizing: border-box;
		padding: 10px;
		vertical-align: middle;
		color: white;
		text-align: center;
		min-height: 200px;
		position: relative;
		font-size: 20px;
		display: inline-block;
	}
	.info_block_row span{
		position: absolute;
		left: 50%;
		font-size: 30px;
		vertical-align: middle;
		top: 50%;
		transform: translateX(-50%) translateY(-50%);
	}
	.org_name
	{
		display: inline;
		color: #e62b1e;
	}
	@media screen and (max-width: 900px)
	{
		#form_contact_form
		{
			width: 100%;
            padding-left: 0 !important;
		}
		#info_block
		{
			width: 100%;
		}
		
	}
    #left_holder
    {
        width: 100%;
        height: 300px;
        display: inline-block;
        margin: 20px 0;
    }
	#google_map_holder
	{
		position: relative;
		width: 100%;
        height: 300px;
		display: inline-block;
	}
  </style>
	<div class="page_title_block">
		<div class="page_title_cont">
			<span class="page_title_white">CONTACT </span><span class="page_title_red">US</span>
			<p>Answers to all queries, requests and suggestions are just an email or a call away. Please don’t hesitate in reaching out to us.</p>
		</div>
	</div>
    <div id="content">
	<div id="contact_form">
		<div id="left_holder">
			<div id="google_map_holder">
			</div>
            <script>
                function initMap()
                {
                    map = new google.maps.Map(document.getElementById('google_map_holder'), {
                        center: {lat: 28.52673,lng: 77.575363},
                        zoom: 17,
                        styles: [
                            {
                                "featureType": "all",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "invert_lightness": true
                                    },
                                    {
                                        "saturation": 10
                                    },
                                    {
                                        "lightness": 30
                                    },
                                    {
                                        "gamma": 0.5
                                    },
                                    {
                                        "hue": "#e62b1e"
                                    }
                                ]
                            }
                        ]
                    });
                }
            </script>
		</div>
        <div id="info_block">
            <div class="info_block_row">
                <span><i class="fas fa-envelope"></i>  tedx.club@snu.edu.in</span>
            </div>
        </div>
		<form action="" id="form_contact_form" method="post">
            <h1 style="text-align: center;">Quick Message</h1>
			<!-- <label for="input_name" id="label_name">Name:</label><br> -->
			<input id="input_name" name="input_name" type="text" placeholder="Apple Johnseed"></input><br>
			<!-- <label for="input_email" id="label_email">Email:</label><br> -->
			<input id="input_email" name="input_email" type="email" placeholder="name@email.com"></input><br>
			<input id="input_phone" name="input_phone" type="text" placeholder="9876543210"></input><br>
			<textarea id="input_address" name="input_address" type="address" placeholder="Your Address"></textarea><br>
			<!-- <label for="input_message" id="label_message">Message:</label><br> -->
			<textarea id="input_message" name="input_message" type="textbox" placeholder="Your message"></textarea><br>
			<button>Send</button>
		</form>
	</div>
    </div>
<?php
}
?>
