<?php

session_start();

include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/user.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";
$product_id = $_POST['product_id'];
$req_units = $_POST['units_req'];

//create new user object
$user = new User;

//user_id
$user_id = $_SESSION['user_id'];
//create a database object
$db = Database::connect_default();
$user->getUserStock()->sellProduct($db,$product_id,$req_units,$user_id);


?>