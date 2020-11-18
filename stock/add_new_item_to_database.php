<?php

session_start();

include "../lib/stock.php";
$product_name=$_POST['item_name'];
$product_price=$_POST['price_per_unit'];
$buying_price=$_POST['buying_price'];
$units=$_POST['unit'];


$stock = new Stock;
$stock->addStockToDatabase($product_name,$stock->getUserId(),$product_price,$buying_price,$units);

if($stock)
{
    header("Location:http://192.168.43.130:8080/dary/index.php");
}
else
{
    echo "An error occured";
}


?>