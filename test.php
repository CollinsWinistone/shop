<?php 


$test=$_SERVER['DOCUMENT_ROOT']."/dary/config/config.php";
$database=$_SERVER['DOCUMENT_ROOT']."/dary/lib/cosa_db.php";
$user=$_SERVER['DOCUMENT_ROOT']."/dary/lib/user.php";
$stock_obj=$_SERVER['DOCUMENT_ROOT']."/dary/lib/stock.php";

include ("$test");
include ("$database");

include ("$stock_obj");

//$db=Database::connect(DB_HOST,DB_USERNAME,DB_NAME,DB_PASSWORD);
$db=Database::connect_default();

$stock_data = [
    'product_name'=>'samsung',
    'user_id'=>1,
    'price'=>4800,
    'buying_price'=>4950,
    'units'=>3
];

$reg_data = [
    'email'=>'colly@gmail.com',
    'contact'=>'0721869365',
    'password'=>'salama',
    'first_name'=>'collins',
    'last_name'=>'simiyu'
];

$test = new Stock;
//$test->addStock($db,$stock_data,1);
$test->isStockAvailable($db,19,3);
//$test->register($db,$reg_data);
//$test->getUserStock()->addStock($db,$add_stock,1);
//$test->getUserStock()->isStockAvailable($db,1,5);








?>