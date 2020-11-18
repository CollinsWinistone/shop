<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header/header.css">
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <script src="../styles/fontawesome/js/all.js"></script>
    
</head>
<body>
    <!-- header section-->

    <?php include "../include_files/header.php"; ?>

    <!-- end of header section-->
    <div class="container mt-3">

        <div class="card"">
            <img class="card-img-top" src="../dev_images/out.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Stock Status</h5>
                <p class="card-text">The item you are trying to sell is depleted.Please add stock</p>
                <a href="http://192.168.43.130:8080/dary/stock/add_new_item.php" class="btn btn-primary">Add Stock</a>
            </div>
        </div>


    </div>

  


    


<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>