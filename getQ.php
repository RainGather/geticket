<?php
require "conn.php";

$result = mysql_query("SELECT * FROM devq WHERE TYPE=1");
$num = mysql_num_rows($result);
$arr[] = "";

function jsonEncode($phparr) 
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

for ($i=0; $i<$num; $i++)
{
  $row = mysql_fetch_array($result);
  $arr[$i] = $row;
}

$myjson = jsonEncode($arr);
echo $myjson;
?>