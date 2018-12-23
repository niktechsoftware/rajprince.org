<html>
    <head>		
    	<title>Raj Prince | Admin Panel</title>
        <style type="text/css">
		html
		{
			font-family:Arial, Helvetica, sans-serif;
		}
		.main
		{
			width:1000px;
			position:relative;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
		}
		.head{
			background: rgb(181,189,200); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(181,189,200,1) 0%, rgba(130,140,149,1) 36%, rgba(40,52,59,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(181,189,200,1)), color-stop(36%,rgba(130,140,149,1)), color-stop(100%,rgba(40,52,59,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(181,189,200,1) 0%,rgba(130,140,149,1) 36%,rgba(40,52,59,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(181,189,200,1) 0%,rgba(130,140,149,1) 36%,rgba(40,52,59,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(181,189,200,1) 0%,rgba(130,140,149,1) 36%,rgba(40,52,59,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(181,189,200,1) 0%,rgba(130,140,149,1) 36%,rgba(40,52,59,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=0 ); /* IE6-9 */
			width:500px;
			border-radius:30px 30px 0px 0px;
			border:1px solid #ccc;
			color:#FFF;
			margin-top:100px;
			margin-left:auto;
			margin-right:auto;
		}
		.login{
			width:500px;
			border-radius:0px 0px 30px 30px;
			border:1px solid #ccc;
			margin-left:auto;
			margin-right:auto;
			background: rgb(226,226,226); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(226,226,226,1) 0%, rgba(219,219,219,1) 50%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(226,226,226,1)), color-stop(50%,rgba(219,219,219,1)), color-stop(51%,rgba(209,209,209,1)), color-stop(100%,rgba(254,254,254,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 ); /* IE6-9 */

		}
		.copy{
			width:500px;
			margin-top:200px;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
		}
		</style>
    </head>
<body>
<div class="main">
	<div class="head"><h3>Administration Login</h3></div>
    <div class="login">
    	<?php

$i = $_GET['i'];

if($i == 1)
{
echo '<font color="red"><b>Wrong UserId or Password Contact your Website administrator.</b></font>';
}

?> 
<form method="post" action="login_db.php" enctype="multipart/form-data">
                                
                                <table align="center" height="200">
									<tr>
										<td> User Name </td>
										<td><input type="text" name="uid" /></td>
									</tr>
									<tr>
										<td >Password </td>
										<td ><input type="password" name="pass" /></td>
									</tr>
									<tr>
										<td align="center" colspan="2" >
											<input type="submit" value="Submit"  />
											<input type="reset" value="Reset"/>
										</td>
									</tr>
								</table>
                            </form>	
    </div>
    <div class="copy">Copyright &copy; 2014 Hwebs technologies.</div>
</div>

							

						
	</body>
</html>
