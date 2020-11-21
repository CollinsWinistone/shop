<?php

session_start();

include "../../lib/stock.php";
$price=$_GET['new_price'];
$prod_id=$_GET['pid'];

$edit_name=new Stock;
$edit_name->editPrice($prod_id,$price);


?>