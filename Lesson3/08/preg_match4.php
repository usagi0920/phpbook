<?php
$str = "1234567";
$rtn = preg_match('/\d{7}/u', $str, $match);

$str2 = "あいうえお";
$rtn2 = preg_match('/\d{7}/u', $str2, $match2);

$str3 = "123-4567";
$rtn3 = preg_match('/\d{7}/u', $str3, $match3);

echo "結果1";
var_dump($rtn);

echo "結果2";
var_dump($rtn2);

echo "結果3";
var_dump($rtn3);