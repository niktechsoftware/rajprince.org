<!DOCTYPE html>
    <head>		
        <title>Raj Prince</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>NEW STUDENT ADMITION</h2></div>
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
          <form method="post" action="new_ad_db.php" id="form2" runat="server" enctype="multipart/form-data">
				
				<table width="80%" align="center">
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><input type="text" name="name" size="40" />
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="fname" size="40" required />
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">DATE OF BIRTH* (DD/MM/YYYY) :
						</td>
						<td align="left"><input type="text" name="dob" size="12" id="inputField" required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">ADDRESS* :</td>
						<td align="left"><textarea name="add" rows="5" cols="30" required></textarea></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">MOBILE NUMBER* :</td>
						<td align="left"><input type="text" name="mob" size="40" required/></td>
					</tr>
					<tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
						<td align="left">E MAIL ID* :</td>
						<td align="left"><input type="text" name="email" size="40" required/></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">EDUCATIONAL QUALIFICATION:</td>
						<td align="left">
						
							<table>
								<tr>
									<td>Highest Qualification</td>
									<td>&nbsp;&nbsp;</td>
									<td>Board / University</td>
									<td>&nbsp;&nbsp;</td>
									<td>Year</td>
								</tr>
								<tr>
									<td><input type="text" name="highestq" size="20" /></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="university" size="20" /></td>
									<td>&nbsp;&nbsp;</td>
									<td><input type="text" name="year" size="4" /></td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
								<tr>
									<td>Register for</td>
									<td>
										<select name="dept">
											<option value="AIR FORCE">AIR FORCE</option>
											<option value="BANK PO">BANK PO</option>
											<option value="NAVY">NAVY</option>
											<option value="NDA">NDA</option>
											<option value="SSC">SSC</option>
										</select>
									</td>
								</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td>Browse your Image:</td>
						<td><input type="file" class="file_1" name="img" />JPEG, GIF 5MB max per image</td>
					</tr>
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="REGISTER" />	&nbsp;&nbsp;	<input type="reset" value="RESET" />	</td>						
					</tr>
				</table>					
                    </form>
              </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>		

						
	</body>
</html>
