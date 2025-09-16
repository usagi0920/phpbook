<?php
ini_set('display_errors',"On");
require_once 'data.php';

foreach($people as $key => $person){
    echo '名前は' . $person['name'] . '<br>';
}