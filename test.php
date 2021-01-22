<?php 

$test=$_SERVER['DOCUMENT_ROOT']."/shop/lib/sales_stats.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";
include ("$test");
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/validator.php";
$db = Database::connect_default();

$t = new Validator;

echo $_SERVER['SERVER_NAME'];







?>