<?php 

$test=$_SERVER['DOCUMENT_ROOT']."/shop/lib/sales_stats.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";
include ("$test");
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/validator.php";
// database connectivity
$db = Database::connect_default();











?>