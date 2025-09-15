<?php
ini_set('display_errors',"On");

$people = ['name' => '佐藤', 'blood' => 'A'];


foreach($people as $key => $value){
    echo 'キーは'.$key.'、値は'.$value.'<br>';
}