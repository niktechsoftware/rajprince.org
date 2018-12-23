<?php
include_once 'db.php';

$name = $_POST['name'];
$file = $_FILES['img'];
$sub = $_POST['sub'];
$dept = $_POST['dept'];
$exp = $_POST['exp'];
$img = $name.$file["name"];

$t = mysql_query("INSERT INTO team(name,image,subject,dept,exp) VALUES('$name','$img','$sub','$dept','$exp')");


if($t)
{
	move_uploaded_file($file["tmp_name"],"./teacher_image/".$img);
header("Location:teacher_entry.php?i=1");
}

else
{
	header("Location:teacher_entry.php?i=2");

	}

?>