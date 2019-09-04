<!DOCTYPE html>
<html>
	<head>
		<title>
           <?php echo $GLOBALS['siteMeta']['title']; ?>
		</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128214096-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-128214096-1');
        </script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="<?php echo $GLOBALS['siteMeta']['desc']; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto|Source+Sans+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['host']; ?>themes/<?php echo $GLOBALS['currTheme'] ; ?>/assets/basic/css/base2_inactive.css" />
		<link rel="icon" href="/assets/favicon.ico">
	</head>
	<body class="leftMenuOpe">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <div id="content">

                <?php $GLOBALS['printPage'](); ?>
                <div id="footer">
                    <div id="footer_cont">
                        <? /*<p id="address">
                            <span>ADDRESS:</span><br><!--
                        -->Shiv Nadar University<br><!--
                        -->NH - 91, Tehsil Dadri<br><!--
                        -->Gautam Buddha Nagar<br><!--
                        -->Uttar Pradesh - 201314<br>
                                <a href="/contact_us">Contact Us</a>	<!--
                        --></p> */?>
                        <div id="footer_social">
                            <a href="http://www.facebook.com/tedxshivnadaruniversity"><i class="fab fa-facebook"></i></a>
                            <a href="http://www.instagram.com/tedxshivnadaruniversity"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/TEDxShivNadarU"><i class="fab fa-twitter"></i></a><br>
                            <p style="font-family: "Arial", sans-serif;">This independent <span style="color: #e62b1e; font-weight: bold;">TEDx</span> event is operated under license from <span style="color: #e62b1e; font-weight: bold;">TED</span>.</p>
                        </div>
                    </div>
                </div>
        <div id="top_strip">
            <div class="rel">
                <div id="top_strip_bg"></div>
                <img id="tedxLogo" src="<?php echo $GLOBALS['astLink'] ; ?>images/tedx_snu_white.png">
<!--                        <br>-->
                <i class="fas fa-bars" id="hamburger"></i>
<!--                        <a target="_blank" class="tickets_button" id="pc_tickets" href="--><?// echo $GLOBALS['host']; ?><!--tickets">-->
<!--                            <i class="fas fa-ticket-alt"></i> TICKETS-->
<!--                        </a>-->
                <div id="menu-space">
                    <div class="rel">
                        <a class="menu-item" id="home-menu-item" href="<? echo $GLOBALS['host'] ; ?>">HOME</a>
<!--                                <div class="menu-item drop-down-item" id="about-menu-item">ABOUT-->
<!--                                    <div class="rel">-->
<!--                                        <div class="drop-down-menu-bar">-->
                                        <a class="menu-item" id="about-menu-item" href="<? echo $GLOBALS['host'] ; ?>about">ABOUT</a>
<!--                                            <a class="menu-drop-down-item" href="--><?// echo $GLOBALS['host'] ; ?><!--meet_the_team">THE TEAM</a><br>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <a class="menu-item" href="--><?// echo $GLOBALS['host'] ; ?><!--about" id="about-menu-item">ABOUT US</a>-->
                        <div class="menu-item drop-down-item" id="past-conf-menu-item">PAST CONFERENCES
                            <div class="rel">
                                <div class="drop-down-menu-bar">
                                    <a class="menu-drop-down-item" href="<? echo $GLOBALS['host'] ; ?>pastc/2018">2018</a><br>
                                    <a class="menu-drop-down-item" href="<? echo $GLOBALS['host'] ; ?>pastc/2017">2017</a><br>
                                    <a class="menu-drop-down-item" href="<? echo $GLOBALS['host'] ; ?>pastc/2016">2016</a>
                                </div>
                            </div>
                        </div>
                        <a class="menu-item" href="<? echo $GLOBALS['host'] ; ?>contact">CONTACT US</a>
                        <!--<a class="menu-item tickets_button" id="mobile_tickets" href="<? echo $GLOBALS['host']; ?>tickets" target="_blank">
                            TICKETS
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
        </div>
		</div>
        <a id="joinNow" href="<? echo $GLOBALS['host'] ; ?>join">JOIN THE TEAM</a>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $GLOBALS['host']; ?>themes/<?php echo $GLOBALS['currTheme'] ; ?>/assets/basic/js/base1_inactive.js"></script>
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
