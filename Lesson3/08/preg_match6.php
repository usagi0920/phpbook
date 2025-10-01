<?php
$str = "12345678";
$rtn = preg_match('/\A\d{7}\z/u', $str, $match);

$str2 = "1234567あ";
$rtn2 = preg_match('/\A\d{7}\z/u', $str2, $match2);

$str3 = "123-4567890";
$rtn3 = preg_match('/\A\d{7}\z/u', $str3, $match3);

$str4 = "1234567";
$rtn4 = preg_match('/\A\d{7}\z/u', $str4, $match4);

echo "結果1";
var_dump($rtn);

echo "結果2";
var_dump($rtn2);

echo "結果3";
var_dump($rtn3);

echo "結果4";
var_dump($rtn4);