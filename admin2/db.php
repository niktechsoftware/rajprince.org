<?php
$dbhost='localhost';
$dbuser='gfincuct_raj_p';
$dbpass="rahul!123singh";
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ("Database Problem");
mysql_select_db('gfincuct_raj_p') or die ("Error ".mysql_error());
?>