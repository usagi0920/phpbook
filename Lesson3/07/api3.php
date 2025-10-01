<?php
ini_set('display_errors',"On");
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . (int)$_GET['zip'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

// $response = file_get_contents($url);
$response = json_decode($response, true);
var_dump($response);