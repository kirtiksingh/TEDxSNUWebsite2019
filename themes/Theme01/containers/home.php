<!DOCTYPE html>
<html>
	<head>
		<title>
           <?php echo $GLOBALS['siteMeta']['title']; ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="<?php echo $GLOBALS['siteMeta']['desc']; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto|Source+Sans+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['host']; ?>themes/<?php echo $GLOBALS['currTheme'] ; ?>/assets/home/css/base.css" />
	</head>
	<body>
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
				<link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['astLink']; ?>src/plugins/clock_assets/flipclock.css" />
                <div class="page_title_block" style="height: 100vh; position: fixed; top: 0; left: 0; width: 100vw; z-index: -1;">
                    <div id="page_title_cont" style="height: 100%;">

                    </div>
                </div>
                <div id="content">
						<?php $GLOBALS['printPage'](); ?>
                </div>
                <div id="footer"></div>
		        <div id="top_strip">
		            <div class="rel">
										<div id="top_strip_bg"></div>
		                <img id="tedxLogo" src="<?php echo $GLOBALS['astLink'] ; ?>images/tedx_snu_white.png"><br>
		                <div id="menu-space">
		                    <a class="menu-item selected">HOME</a>
		                    <a class="menu-item">ABOUT</a>
		                    <a class="menu-item" href="<?php echo $GLOBALS['host'] ; ?>Speakers">SPEAKERS 2018</a>
		                    <a class="menu-item">PARTNERS</a>
		                    <a class="menu-item">PAST CONFERENCES</a>
		                    <a class="menu-item drop-down-item">CONTACT US</a>
		                </div>
		            </div>
		        </div>
				</div>
		</div>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script type="text/javascript"
                        src="<?php echo $GLOBALS['host']; ?>themes/<?php echo $GLOBALS['currTheme']; ?>/assets/home/js/script.js"></script>
        <?php
        if(isset($GLOBALS['jsInclude'])&&is_array($GLOBALS['jsInclude']))
        {
            foreach ($GLOBALS['jsInclude'] as $key)
            {
                $https = (strpos($key, "https://") !== false);
                $http = (strpos($key, "http://") !== false);
                if(($https != true) && ($http != true))
                    $key = $GLOBALS['astLink'] . $key;
                ?>
                <script>console.log("<?php echo $key . " " . ($https ? "https" : "no Https")  . " " . ($http ? "http" : "no Http"); ?>");</script>
                <script type="text/javascript" src="<?php echo $key ; ?>"></script>
                <?php
            }
        }
        ?>
	</body>
</html>