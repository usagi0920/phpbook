<?php
ini_set('display_errors',"On");
//データを読み込む
$fp = fopen('bookdata.csv', 'r');

if($fp === false){
    echo "ファイルのオープンに失敗しました";
    exit;
}
var_dump($fp);