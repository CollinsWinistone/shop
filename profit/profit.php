<?php

session_start();

$test=$_SERVER['DOCUMENT_ROOT']."/shop/lib/sales_stats.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";
include ("$test");

$db = Database::connect_default();
$user_id = $_SESSION['user_id'];

$app = new SalesStats;
$profit = $app->getProfitOnSales($db,$user_id);


echo $profit['profit'];


?>