<?php 


$test=$_SERVER['DOCUMENT_ROOT']."/dary/config/config.php";
$database=$_SERVER['DOCUMENT_ROOT']."/dary/lib/cosa_db.php";
$user=$_SERVER['DOCUMENT_ROOT']."/dary/lib/user.php";

include ("$test");
include ("$database");

include ("$user");

$db=Database::connect(DB_HOST,DB_USERNAME,DB_NAME,DB_PASSWORD);
//$db=Database::connect_default();

$reg_data=[
    'email'=>'deborah@gmail.com',
    'contact'=>'0713080474',
    'password'=>'collins',
    'first_name'=>'debrah',
    'last_name'=>'salama'

];
$test=new User;
$stock=$test->getUserStock()->availableStock($db,1);

for ($i=0; $i < count($stock) ; $i++) { 
    # code...
    echo $stock[$i]['product_id']."------".$stock[$i]['product_name']."<br>";
}









>>>>>>> teststock

?>