<?php 
$stock = $_SERVER['DOCUMENT_ROOT']."/dary/lib/stock.php";
$test=$_SERVER['DOCUMENT_ROOT']."/dary/config/config.php";
$database=$_SERVER['DOCUMENT_ROOT']."/dary/lib/cosa_db.php";
$user=$_SERVER['DOCUMENT_ROOT']."/dary/lib/user.php";

include ("$test");
include ("$database");
include ("$stock");
include ("$user");

//$db=Database::connect(DB_HOST,DB_USERNAME,DB_NAME,DB_PASSWORD);
$db=Database::connect_default();

$reg_data=[
    'email'=>'collinssimiyu85@gmail.com',
    'contact'=>'0713080474',
    'password'=>'salama',
    'first_name'=>'debrah',
    'last_name'=>'salama'

];
$test=new User;
$test->login($db,$reg_data);








?>