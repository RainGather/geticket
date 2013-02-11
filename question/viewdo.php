<?php
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

switch($arr['SelectedImageId']){
  case 1:
    $arr['url1'] = '../3.jpg';
    $arr['url2'] = '../2.jpg';
    $arr['newImageId1'] = 3;
    $arr['newImageId2'] = 2;
    break;
  case 2:
    $arr['url1'] = '../1.jpg';
    $arr['url2'] = '../3.jpg';
    $arr['newImageId1'] = 1;
    $arr['newImageId2'] = 3;
    break;
  case 3:
    $arr['url1'] = '../2.jpg';
    $arr['url2'] = '../1.jpg';
    $arr['newImageId1'] = 2;
    $arr['newImageId2'] = 1;
    break;
  default:
    $arr['url1'] = 'error';
    $arr['url2'] = 'error';
    $arr['newImageId1'] = 0;
    $arr['newImageId2'] = 0;
    break;
}

//print_r($arr); 
$myjson = my_json_encode($arr); 
echo $myjson; 
//echo "{\"url\":\"..\/3.jpg\",\"newImageId\":3}";
?>