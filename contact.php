<!DOCTYPE html>

<html>
<head>
    <!-- META -->
	<meta charset="utf-8" />
    <title>:: Raj Prience | Selected Student ::</title>
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
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/jquery.jtweetsanywhere-1.2.1.min.js"></script>
    <script src="js/default.js"></script>
	<!-- /SCRIPTS + JQUERY -->
	
	<!-- Themes Panel -->
	<link rel="stylesheet" href="themes_panel/farbtastic/farbtastic.css" type="text/css" />
	<script type="text/javascript" src="themes_panel/farbtastic/farbtastic.js"></script>
	<link rel="stylesheet" href="themes_panel/themes_panel.css" />
	<script src="themes_panel/themes_panel.js"></script>
	<!-- /Themes Panel -->
</head>

<body>
	<!-- BEGIN Preview - Themes Panel -->
	
	<!-- END Preview - Themes Panel -->
	
    <?php include"header.php"; ?><!-- END HEADER -->
    
    <section class="wrap container"><!-- BEGIN WRAP FOR CONTENT + SIDEBAR -->
		
		<!-- BEGIN CONTENT COLUMN -->
        <div class="content left">
			
			<h2>Contact Us</h2>
			<p>Be free to play with this Email Contact form. In this demo everything works as it should, except it sends your message to fictional Email address.</p>
			
			<!-- Begin Contact Form -->
			<form id="contact" action="mail.php" method="post">
				<fieldset>
					<label for="name">Name</label>
					<input type="text" name="name" value="" id="name" />
				</fieldset>
				
				<fieldset>
					<label for="email">Email</label>
					<input type="text" name="email" value="" id="email" />
				</fieldset>
				
				<fieldset>
					<label for="message">Message</label>
					<textarea name="msg" id="message" rows="20" cols="452"></textarea>
				</fieldset>
				
				<input class="button right" type="submit" name="submit" value="Mail Us" />
			</form>
			<!-- End Contact Form -->
			
			<div class="separator"></div>
			
			<h2>Easy to Find Us</h2>
			<p>Maecenas molestie faucibus at tincidunt. In ultrices nulla eu elit venenatis commodo. Class apte tacitisi ociosqu ad litora torquent per. Class apte taciti sociosqu ad litora torquent per.</p>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.2607329699767!2d83.55451223862302!3d25.562990903145963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33a319c33647aa6b!2sNehru+stadium-++Gorabazar!5e0!3m2!1sen!2sin!4v1389359268886" width="950" height="350" frameborder="0" style="border:0"></iframe>
			
        </div>
		<!-- END CONTENT COLUMN -->
		
		<!-- BEGIN SIDEBAR -->
        <aside class="right">
			
			<h3>Postal Address</h3>
			<p>
				In Front of
				Nehru Stadium <br />
                PG Collage Road<br />
				Gorabazar Ghazipur-110033
			</p>
			
			<h3>Branc Office</h3>
			<p>
				Near of RTO OFFICE<br />
				Rauza Ghazipur-110033<br />
			</p>
			
			<h3>Phones</h3>
			<p>
				Support: +91 - 9559790694<br />
				Management: +91 - 9839053650<br />
			</p>
            
            <h3>Office</h3>
			<p>
				Office-Phone: 011 - 45674444<br />
			</p>
			
            <h3>Director</h3>
			<p>
				<strong>B. S. Maurya</strong><br />
				Mobile: +91 - 9721280480<br />
                Mobile: +91 - 9451727563<br />
                <strong>Deepak Sir</strong><br />
                Mobile : +91 - 9811857550
			</p>
            
            <h3>E-Mail</h3>
			<p>
				
				info@rajprince.org<br />
                rptc.ghazipur@gmail.com<br />
			</p>
			<div class="separator small empty"></div>
			
        </aside>
		<!-- END SIDEBAR -->
		
    </section><!-- END WRAP -->
    
    <?php include"footer.php" ?><!-- END FOOTER -->

</body>
</html>
