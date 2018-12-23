<!DOCTYPE html>
	<head>
		<title>Raj Prince | ABOUT US</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>NEWS POST</h2></div>
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
							<form method="post" action="post_news_db.php" enctype="multipart/form-data" >
							<table>
								<tr>
									<td>NEWS TITLE</td>
									<td><input type="text" name="title"/></td>
								</tr>
								<tr>
									<td>NEWS DETAIL</td>
									<td><textarea name="c" rows="10" cols="70"></textarea></td>
								</tr>
								
								<tr>
									<td>POSTED DATE</td>
									<td><input type="text" name="dt"/></td>
								</tr>
								<tr>
									<td>RELETED WEB URL</td>
									<td><input type="text" name="url"/></td>
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
