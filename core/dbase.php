<?php

$db = mysqli_connect('localhost','root','','ecomshop');
if(!$db){
    echo 'not connected';
}

session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'core/config.php';
require_once BASEURL.'helpers/gethelp.php';

$card_id = '';
if(isset($_COOKIE[CART_COOKIE])){
    $card_id = sanitize($_COOKIE[CART_COOKIE]);
}
?>