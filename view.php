<?php 
header('Content-Type: application/json; charset=utf-8');  // optional

$data = array();

// Variable like HasMap...........................
$userInfo['name'] = "Jubayer Hossain";
$userInfo['mobile'] = "65656";
$userInfo['email'] = "jubayer@hos.com";
array_push($data, $userInfo);

$userInfo['name'] = "Hossain";
$userInfo['mobile'] = "6565ty6";
$userInfo['email'] = "fghfgh@hos.com";
array_push($data, $userInfo);

$userInfo['name'] = "Jubayer";
$userInfo['mobile'] = "65655456";
$userInfo['email'] = "sdfsdg@hos.com";
array_push($data, $userInfo); 
/*
//same to abave...................................
$userInfo = array(
    "name" => "Jubayer Hossain",
    "mobile" => "336699",
    "email" => "yasin@bal.com"
    
    );
*/

  echo json_encode($data);
?>
