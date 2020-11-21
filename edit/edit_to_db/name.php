<?php

session_start();

include "../../lib/stock.php";
$name=$_GET['new_name'];
$prod_id=$_GET['pid'];



$edit_name=new Stock;
$edit_name->editName($prod_id,$name);


?>