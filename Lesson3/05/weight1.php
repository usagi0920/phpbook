<?php
$height = (float)$_POST['height'];
// if((0 < $height) && ($height < 3)){
//     echo '適正体重は' . $height **2 * 22 . "kgです";
if(0 < $height){
    if( $height < 3){
    echo '適正体重は' . $height ** 2 * 22 . "kgです";
    }else{
        echo '3より小さい値で入力してください';
    }
}else{
    echo "正しく入力してください";
}
