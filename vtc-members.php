<?php
// CORS izin ver
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// VTC ID
$vtcId = "59338";

// TruckersMP API URL'si
$url = "https://api.truckersmp.com/v2/vtc/$vtcId/members";

// API'den veriyi al
$response = file_get_contents($url);

// Gelen veriyi aynen döndür
echo $response;
?>
