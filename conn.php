<?php
$sql_loc="localhost";
$sql_user="root";
$sql_pwd="456789";
$sql_lib="tedxmoonlake";
$tabq = "devq";

$con = mysql_connect($sql_loc,$sql_user,$sql_pwd);
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
mysql_select_db($sql_lib, $con);
//mysqli_set_charset($con, "utf8");
?>