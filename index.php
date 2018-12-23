<!DOCTYPE html>

<html>
<head>
    <!-- META -->
	<meta charset="utf-8" />
    <title>:: Raj Prince Defence Acadmy ::</title>
	<!-- /META -->
    
    <!-- CSS -->
	<link rel="stylesheet" href="slider/nivo/nivo-slider.css" />
	<link rel="stylesheet" href="slider/nivo/nivo-style.css" />
	<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/colors.css" />
	<!-- /CSS -->
    
    <!-- SCRIPTS + JQUERY -->
	<!-- The HTML5 Shim for older browsers (mostly older versions of IE). -->
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<script src="slider/nivo/jquery.nivo.slider.pack.js"></script>
	<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="js/jquery.jtweetsanywhere-1.2.1.min.js"></script>
    <script src="js/default.js"></script>
    
	<!-- /SCRIPTS + JQUERY -->
	
	<!-- Themes Panel -->
	<link rel="stylesheet" href="themes_panel/farbtastic/farbtastic.css" type="text/css" />
	<script type="text/javascript" src="themes_panel/farbtastic/farbtastic.js"></script>
	<link rel="stylesheet" href="themes_panel/themes_panel.css" />
	<script src="themes_panel/themes_panel.js"></script>
	<!-- /Themes Panel -->
    
<style type="text/css">
.tb{background:none; border:none;}

table{background:none; border:none;}
table tr{background:none; border:none;}
table tr td {background:none; border:none;}
</style>
</head>

<body>
	<!-- BEGIN Preview - Themes Panel -->
	
	<!-- END Preview - Themes Panel -->
	
    <?php include"header.php"; ?><!-- END HEADER -->
    
    <section class="wrap"><!-- BEGIN SLIDER, TESTIMONIALS AND SERVICES -->
	
		<?php include"slider.php"; ?><!-- end slider -->
        
		<?php include"testimonial.php"; ?><!-- end testimonials -->

        <div id="services"><!-- begin services -->
            <div class="third">
            	<img src="images/onebit_24.png" alt="Image" style="float:left;" />
                <h2 style="font-size:20px; line-height:30px; color:#333; margin-left:30px;">Indian Army</h2>
              <p align="justify" style="margin-top:20px;">Grit and experience affect the growth of an institution. Fighting four major wars, insurgency and other low intensity wars has indeed made the Indian Army an eminently and efficient battle trained, war machine.</p>
<p align="justify">Changing times bring changing needs. Battle training must tell also on the structuring of the army, for it is this function that extracts the most from the assets available, both men and material. A look at the command and structuring of the Indian Army shows how finely these have been tuned to meet India's threat perceptions, based on the experience of the major wars that it has fought and the present-day geo-political context.</p>
              <p>&nbsp;</p>
            </div>
            <div class="third">
                <img src="images/onebit_26.png" alt="Image" style="float:left;"  />
            <h2 style="font-size:20px; line-height:30px; color:#333; margin-left:30px;">Indian Air Force</h2>
                <p align="justify" style="margin-top:20px;">
                The Motto of Indian Air Force has been taken from eleventh chapter of the Gita, the Discourse given by Lord Krishna to Arjuna on the battlefield of Kurukshetra during the Great War of Mahabharata. The Lord is showing His Supreme Divine form to Arjuna and the great form of the Lord is reaching the sky with glory, evoking fear and loss of self-control in the mind of Arjuna.The Indian Air Force, similarly, aims to overwhelm the adversaries with application of aerospace power in defence of the nation.</p>
            </div>
            <div class="third">
                <img src="images/onebit_16.png" alt="Image" style="float:left;"   />
                <h2 style="font-size:20px; line-height:30px; color:#333; margin-left:30px;">Indian Navy</h2>
            <p align="justify" style="margin-top:20px;">The Indian Navy is today a potent and capable force which is highly regarded for its professional competence. The planned induction of advanced platforms and technology, and creation of modern infrastructure, promise to boost the capabilities of the Service even further in the near future</p>
              <p align="justify">Our operating environment is likely to remain in a state of ferment due to a variety of factors which include geo-politics, emerging technologies, and continuously evolving capabilities in our maritime neighbourhood. </p>
            </div><!-- end services -->
        </div>
    </section><!-- END SLIDER, TESTIMONIALS AND SERVICES -->
    
   
    
    <section class="wrap container"><!-- BEGIN ARTICLE LIST + SIDEBAR -->
	
        <div class="content left" style="margin-top:-50px;"><!-- begin content column -->
            <div class="about_author">
						<img class="author_avatar" src="images/BS.png" width="76" height="69"  />
						<h3>Message From Director</h3>
						 <p align="justify">Since it's inception 10 years ago, Raj-Prince Defence Academy has steadily grown both in stature and in eminence. This  monument with its awesome grandeur is indeed a silent spectator, a mute witness to so many heroes who have set human records, scaled new heights and fought with elan for the safety, security and honour of our motherland. One gets simply baffled at its  elegance,  ambience and the old-age traditions and practices.</p>
              <p align="justify"> RDA has emerged as an iconic institution, national brand of excellence promoting jointmanship and camaraderie. Inevitably, RDA's tryst with destiny has moulded many a great leader of valour, who have lived up to his ethos "Service Before Self". Its alumni have established a reputation of professionalism, dedication and self sacrifice that has made our tri-services legendary. As commandant of this great institution, I am delighted to welcome you to RDA's website.</p>
					</div><!-- end article list -->
        </div><!-- end content column -->
		
        <aside class="right">
        <h1> Letest News</h1><!-- begin sidebar -->
            <marquee direction="up" height="250" scrollamount="2" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
                    <?php 
						include_once"db.php";
						$news = 'select * from news';
						$result1 = mysql_query($news);
						while($row = mysql_fetch_array($result1))
						{
							?>
                            	<strong><h2><?php echo $row['title']; ?></h2></strong><br />
                                <p><?php echo $row['detail']; ?></p>
                                <strong style="float:right;"><a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a></strong>
                            <?php
						}
					?>
                    </marquee>     
        </aside><!-- end sidebar -->
    </section><!-- END ARTICLE LIST + SIDEBAR -->
    
    <?php include"footer.php" ?><!-- END FOOTER -->

</body>
</html>
