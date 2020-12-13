<?php 
include "database/dbc.php";
//mysqli

$result = $mysqli->query("SELECT 'Collins is the best Engineer' AS test");
$row = $result->fetch_assoc();

echo $row['test'];




?>