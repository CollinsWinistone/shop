<?php

session_start();

include "../../lib/stock.php";
$name=$_GET['new_units'];
$prod_id=$_GET['pid'];

$edit_name=new Stock;
$edit_name->editUnits($prod_id,$name);

?>