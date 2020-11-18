<?php
session_start();

include "lib/user.php";
$test=new user;
$profit=$test->getProfit();
$_SESSION['profit']=$profit;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/header/header.css">
    <link rel="stylesheet" href="styles/bootsrap/css/bootstrap.min.css">
    <script src="styles/fontawesome/js/all.js"></script>
    
</head>

<body>

<!-- header-->
<?php include "include_files/header.php"; ?>

<!-- header-->
    
    

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">Sell</th>
    </tr>
  </thead>

    <!-- php script to retrieve records from database-->
    <tbody>
    <?php

        $user_id=$_SESSION['user_id'];

        include "database/dbc.php";
        $query="SELECT product_id,product_name,price ,units,buying_price
                FROM product
                WHERE user_id=$user_id";
        $results=mysqli_query($dbc,$query);

        while($row=mysqli_fetch_array($results,MYSQLI_ASSOC))
        {
            $pid=$row['product_id'];
            $pn=$row['product_name'];
            $pr=$row['price'];
            $un=$row['units'];
            $bp=$row['buying_price'];
            echo 
            "<tr>
                <th scope=\"row\">$pid</th>
                <td>$pn</td>
                <td>$pr</td>
                <td><a href=\"buy/buy_item_db.php?pid=$pid&pn=$pn&pr=$pr&un=$un&bp=$bp\" class=\" btn btn-primary\">sell
                    <span class=\"text-warning\"><i class=\"fas fa-check-circle\"></i></span>
                </td>
            </tr>";
            
            //echo "<a href=\"buy/buy_item_db.php?pid=$pid&pn=$pn&pr=$pr&un=$un&bp=$bp\">sell</a><br>";
        }

?>

    <!-- end of php script to retrieve product data-->

  </tbody>
</table>

    
    
<script src="js/jqery.js"></script>
<script src="styles/bootsrap/js/bootstrap.min.js"></script>
    
</body>
</html>