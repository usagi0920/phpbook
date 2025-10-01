<?php

if(!isset($_GET['zip'])){
    echo "zipを設定してください";
    exit;
}

$rtn = preg_match('/\A\d{7}\z/u', $_GET['zip']);
if(!$rtn){
    echo "郵便番号は数字7桁で入力してください";
    exit;
}

$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . (int) $_GET['zip'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$response = json_decode($response, true);

echo "入力された郵便番号は";
echo $response['results'][0]['address1'];
echo $response['results'][0]['address2'];
echo $response['results'][0]['address3'];
echo "の郵便番号です";
echo $response['message'];