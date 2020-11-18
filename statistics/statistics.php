<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statistics</title>
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <script src="../styles/fontawesome/js/all.js"></script>
    
        
</head>
<body>
    
    <!-- header-->
    <?php include "../include_files/header.php";?>
    <!-- end of header-->
    <!-- table head-->

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">price</th>
            <th scope="col">units</th>
            </tr>
        </thead>

    <!-- end of table head-->
   
        <tbody>
            <?php

                include "../lib/stock.php";
                $stock=new Stock;
                $stock->getAllProducts();

            ?>

    
        </tbody>
</table>


<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>
