<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from team where s_no='$sno'";
mysql_query($query);
header("Location:manage_teacher.php?i=1");
?>