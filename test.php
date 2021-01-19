<?php 

$test=$_SERVER['DOCUMENT_ROOT']."/dary/lib/sales_stats.php";
include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/cosa_db.php";
include ("$test");
$db = Database::connect_default();

$app = new SalesStats;
$profit = $app->getProfitOnSales($db,1);

echo $profit['profit'];

/**
 * this function prints someones name
 */

function sayHello($name)
{
    echo "hello collins";
}





?>