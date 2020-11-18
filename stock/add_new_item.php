<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <script src="../styles/fontawesome/js/all.js"></script>
</head>
<body>
    <!-- header -->
    <?php include "../include_files/header.php"; ?>
    <!-- end of header section-->

    <!--start of form records section-->

    <div class="container">
        <div class="container">
            <form action="add_new_item_to_database.php" method="POST">
                <input type="text" name="buying_price" placeholder="buying price" class="form-control form-group-lg" required>
                <input type="text" name="item_name" placeholder="Item name" class="form-control form-group-lg" required>
                <input type="text" name="price_per_unit" placeholder="price per unit" class="form-control form-group-lg" required>
                <input type="text" name="unit" placeholder="unit" class="form-control form-group-lg" required>
                
                <input type="submit" class="btn btn-primary w-100">
                
            
            </form>

    <!-- end of from records section-->
        </div>

    </div>
<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>