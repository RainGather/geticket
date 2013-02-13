<?php
require "conn.php";
$tabhash="devhash";
$tabinfo="devinfo";
$tabarg="devarg";
$tabq="devq";
$arr = $_REQUEST;

function my_json_encode($phparr) 
{ 
  if(function_exists("json_encode")) 
  {
    return json_encode($phparr); 
  } 
  else 
  { 
    require_once 'json/json.class.php'; 
    $json = new Services_JSON; 
    return $json->encode($phparr); 
  } 
}

mysql_query("INSERT INTO ".$tabinfo." (name, tel, email, qq, sex, regip, work, whereknow) VALUES ('".$arr['name']."', '".$arr['tel']."', '".$arr['email']."', '".$arr['qq']."', '".$arr['sex']."', '".$_SERVER['REMOTE_ADDR']."', '".$arr['work']."', '".$arr['whereknow']."')");

$myjson = my_json_encode($arr); 
echo $myjson;
?>