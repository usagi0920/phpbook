<?php
require_once 'functions.php';
$height = (float)$_POST['height'];
$weight = (float)$_POST['weight'];
if(!( 0 < $height ) && ( $height < 3 )){
    echo "正しく入力してください";
    exit;
}
if(( $weight < 30 ) || ( 200 < $weight )){
    echo "体重を正しく入力してください";
    exit;
}
//適正体重の算出
$goal_weight = $height ** 2 * 22;
//適正体重との差
// $difference = abs($goal_weight - $weight);
$difference = $goal_weight - $weight;

echo '体重' . str2html($weight). 'kg<br>';
echo '理想' . str2html($goal_weight) . 'kg<br>';

if( $difference < 0){
    echo '適正体重より' . abs($difference) . 'kg太っています';
}elseif($difference > 0 ){
    echo '適正体重より' . abs($difference) . 'kg痩せています';
}else{
    echo 'あなたは適正体重です';
}
// echo '後' . $difference . 'kgで適正体重です<br>';