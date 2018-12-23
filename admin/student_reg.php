<!DOCTYPE html>
	<head>
		<title>Raj Prince | ABOUT US</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Selected Student</h2></div>
        <div class="fom">
        	<?php 
				$i = $_GET['i'];
				if($i == 1)
				{
					echo "<font color='green'>Added Successful..</font>";
				}
				if($i == 2)
				{
					echo "<font color='red'>Somthing wrong contact administrator..</font>";
				}
			?>
							<form method="post" action="reg.php" enctype="multipart/form-data" >
							<table width="100%" height="250" align="center">
								<tr>
									<td>Name</td>
									<td><input type="text" name="name"/></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><input type="text" name="add"/></td>
								</tr>
								<tr>
									<td>image</td>
									<td><input type="file" name="img"/></td>
								</tr>
								<tr>
									<td>Select Year</td>
									<td><input type="text" name="year"/></td>
								</tr>
								<tr>
									<td>Department</td>
									<td>
										<select name="dept">
											<option value="AIR FORCE">AIR FORCE</option>
											<option value="BANK">BANK</option>
											<option value="RPF">RPF</option>
											<option value="NAVY">NAVY</option>
											<option value="SSC">SSC</option>
											<option value="ARMY">ARMY</option>
											<option value="POLICE">POLICE</option>
											<option value="RAILWAY">RAILWAY</option>											
											<option value="CISF">CISF</option>
											<option value="POLYTECHNIC">Polytechnic</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type="submit" value="Enter Detail" /></td>
									<td><input type="reset" value="Reset" /></td>
								</tr>
							</table>
							</form>
        </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

	</body>
</html>
