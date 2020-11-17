<?php
session_start();
include "include_files/header.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/header/header.css">
</head>
<body>
    

   <!-- script to retrieve all products-->
   <?php

    include "database/dbc.php";
    $query="SELECT product_id,product_name,price ,units,buying_price
            FROM product";
    $results=mysqli_query($dbc,$query);

    while($row=mysqli_fetch_array($results,MYSQLI_ASSOC))
    {
        $pid=$row['product_id'];
        $pn=$row['product_name'];
        $pr=$row['price'];
        $un=$row['units'];
        $bp=$row['buying_price'];

        echo "$pn";
        echo "<a href=\"buy/buy_item_db.php?pid=$pid&pn=$pn&pr=$pr&un=$un&bp=$bp\">buy</a><br>";
    }

   ?>

    
    

    
</body>
</html>