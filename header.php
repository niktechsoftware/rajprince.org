<header><!-- BEGIN HEADER -->
        <div id="top_header"><!-- begin top header -->
            <div class="wrap">
                <div id="logo">
                    <img src="images/logo.png" height="120" />
                    <img src="images/rp_title.png" style="margin-left:10px;" />
                </div>
                
                <ul id="social_networks">
                    <li><a href="#" class="network1"></a></li>
                    <li><a href="#" class="network2"></a></li>
                    <li><a href="#" class="network3"></a></li>
                    <li><a href="#" class="network4"></a></li>
                    <li><a href="#" class="network5"></a></li>
                    <li><a href="#" class="network6"></a></li>
                </ul>
            </div>
        </div><!-- end top header -->
		
        <div id="bottom_header"><!-- begin bottom header -->
            <div class="wrap">
                <nav>
                    <ul id="top_nav">
                        <li>&nbsp;</li>
                        <li><a href="#">Home</a>
                        	<ul>
								<li><a href="index.php?i=1">Defence Academy</a></li>
								<li><a href="index.php?i=2">Polytechnic</a></li>
								<li><a href="index.php?i=3">Computer</a></li>
								<li><a href="index.php?i=4">ITI</a></li>
                                <li><a href="index.php?i=5">Driving School</a></li>
							</ul>
                           <!-- end 1st level -->
                        </li>                        
<?php 
$i = $_GET['i'];
	switch($i)
	{
		case 1:
		{
?>
			 			<li><a href="#">Cources We Offer</a>	
                            <ul>
								<li><a href="defence.php?j=1">Airforce</a></li>
								<li><a href="defence.php?j=2">Navy</a></li>
								<li><a href="defence.php?j=3">Army</a></li>
								<li><a href="defence.php?j=4">SSC</a></li>
                                <li><a href="defence.php?j=5">Bank</a></li>
                                <li><a href="defence.php?j=6">Railway</a></li>
                                <li><a href="defence.php?j=7">Police</a></li>
							</ul>
                         </li>
<?php
			break;
		}
		case 2:
		{
?>
						<li><a href="#">Cources We Offer</a>
                            <ul>
								<li><a href="polytech.php?k=1&i=2">Civil Engineering</a></li>
								<li><a href="polytech.php?k=2&i=2">Mechanical Engineering</a></li>
								<li><a href="polytech.php?k=3&i=2">Marrine Engineering</a></li>
								<li><a href="polytech.php?k=4&i=2">Electronic Engineering</a></li>
                                <li><a href="polytech.php?k=5&i=2">Computer Science</a></li>
                                <li><a href="polytech.php?k=6&i=2">Automobile Engineering</a></li>
							</ul>
                         </li>
<?php
			break;
		}
		case 3:
		{
?>
						<li><a href="#">Cources We Offer</a>
                            <ul>
								<li><a href="computer.php?l=1&i=3">CCC</a></li>
								<li><a href="computer.php?l=2&i=3">O-Level</a></li>
								<li><a href="computer.php?l=3&i=3">P.D.C.A</a></li>
								<li><a href="computer.php?l=4&i=3">D.C.A</a></li>
							</ul>
                         </li>
<?php
			break;
		}
		case 4:
		{
?>
						<li><a href="#">Cources We Offer</a>
                            <ul>
								<li><a href="iti.php?i=4&m=1">Electrician</a></li>
								<li><a href="iti.php?i=4&m=2">Fitter</a></li>
								<li><a href="iti.php?i=4&m=3">Moter Machanic</a></li>
								<li><a href="iti.php?i=4&m=4">A.C &amp; Refrigerator</a></li>
							</ul>
                         </li>
<?php
			break;
		}
		case 5:
		{
?>
						<!--
                        <li><a href="#">Meet Our Team</a>
                            <ul>
								<li><a href="s_blog_small.html">Mr. B.S. Maurya Ji (Chairman)</a></li>
								<li><a href="s_blog_medium.html">Mr. HansRaj Maurya Ji (Director RPDA)</a></li>
								<li><a href="blog.html">Mr. Bhardwaz (Director RPTC)</a></li>
								<li><a href="post.html">Mr. Lal Ji (Computer Department)</a></li>
							</ul>
                         </li>
                         -->
<?php
			break;
		}
		default:
		{
?>
						<li><a href="#">Cources We Offer</a>
                            <ul>
								<li><a href="defence.php?j=1">Airforce</a></li>
								<li><a href="defence.php?j=2">Navy</a></li>
								<li><a href="defence.php?j=3">Army</a></li>
								<li><a href="defence.php?j=4">SSC</a></li>
                                <li><a href="defence.php?j=5">Bank</a></li>
                                <li><a href="defence.php?j=6">Railway</a></li>
                                <li><a href="defence.php?j=7">Police</a></li>
							</ul>
                         </li>
<?php
			break;
		}
	}
?>
                            <!-- end 1st level -->
                       
                        <li><a href="#">Coaching Pattern</a>
                            <ul>
								<li><a href="c_p.php?c=1">Classroom Teaching</a></li>
                                <li><a href="c_p.php?c=2">Physical Training</a></li>
                                <li><a href="c_p.php?c=3">Medical Examination</a></li>
                                <li><a href="c_p.php?c=4">Inspiration sessions</a></li>
							</ul>
                        </li>
                        <li><a href="selected_stu.php">Selected Gallery</a>
							
						</li>
                         <li><a href="team.php">Our Team</a></li>
                        <li><a href="flipbook/index.html" target="_blank">Flip Book</a></li>
						<li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                
                <form id="search" action="#">
                    <fieldset>
                        <input type="text" name="search" />
                        <input type="submit" value="" />
                    </fieldset>
                </form>
            </div>
        </div><!-- end bottom header -->
    </header>