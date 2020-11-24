<?php

session_start();



//get the id of the item
$product_id=$_GET['pid'];
$product_name=$_GET['pn'];
$price_per_unit=$_GET['pr'];
$units=$_GET['un'];
$bp=$_GET['bp'];

$_SESSION['product_id']=$product_id;
$_SESSION['product_name']=$product_name;
$_SESSION['price_per_unit']=$price_per_unit;
$_SESSION['units']=$units;
$_SESSION['buying_price']=$bp;

header("Location:../buy/buy_item.php");

?>
