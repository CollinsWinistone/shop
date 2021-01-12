<?php 

$test=$_SERVER['DOCUMENT_ROOT']."/dary/lib/sales_stats.php";

include ("$test");

$array = [
    'selling_price'=>4000,
    'buying_price'=>3000,
    'units_purchased'=>1
];

$app_test = new SalesStats;
$profit = $app_test->computeProfit($array,1);

echo "$profit";







?>