<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$vtcId = "59338";
$url = "https://api.truckersmp.com/v2/vtc/$vtcId/members";
$response = file_get_contents($url);
echo $response;
?>