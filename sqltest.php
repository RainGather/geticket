<?php
require "conn.php";
$tabhash="devhash";
$tabinfo="devinfo";
$tabarg="devarg";
$tabq="devq";
$arr = $_REQUEST;

mysql_query("INSERT INTO ".$tabinfo." (name, tel, email, qq, sex, regip, work, whereknow) VALUES ('".$arr['name']."', '".$arr['tel']."', '".$arr['email']."', '".$arr['qq']."', '".$arr['sex']."', '".$_SERVER['HTTP_X_FORWARDED_FOR']."', '".$arr['work']."', '".$arr['whereknow']."')");
?>