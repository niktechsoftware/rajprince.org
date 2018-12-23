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
    
    <section class="wrap container"><!-- BEGIN WRAP -->
	
    <h1> Selected Gallery </h1>
		
		<ul class="portfolio_content col3">
			
            <!-- 1st portfolio item -->
            <?php 
			include_once"db.php";
			$sec = $_GET['d'];
			$q = "select * from sel_student";
			$res = mysql_query($q);
			$no = mysql_num_rows($res);
			if($no > 0)
			{
			while($row = mysql_fetch_array($res))
			{
			?>
				<a class="single_image" href="admin/stu_image/<?php echo $row['image']; ?>">	
                            	<img src="admin/stu_image/<?php echo $row['image']; ?>" alt=" " height="350" width="325"/>
                            	</a>
                     
			<!-- 1st end -->
			<?php 
			} //end while
			} // end if
			else
			{
				echo "<h1 style='color:red;'>No Student in this Section</h1>";
			}
			?>
		</ul>
		<!-- END PORTFOLIO CONTENT -->
    </section><!-- END WRAP -->
    
    <?php include"footer.php" ?><!-- END FOOTER -->

</body>
</html>