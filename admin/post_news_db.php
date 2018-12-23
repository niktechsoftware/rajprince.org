<?php
include_once 'db.php';

$title = $_POST['title'];
$detail = $_POST['c'];
$dt = $_POST['dt'];
$url = $_POST['url'];


$t = mysql_query("INSERT INTO news(title,detail,post_date,url) VALUES('$title','$detail','$dt','$url')");


if($t)
{
	
header("Location:post_news.php?i=1");

}
else
{
	header("Location:post_news.php?i=2");

	}

?>