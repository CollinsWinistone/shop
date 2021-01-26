<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit selling_price</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/header/header.css">
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <script src="../styles/fontawesome/js/all.js"></script>
    <title>Document</title>
   
</head>
<body>
    <!-- header -->
    <?php include "../include_files/header.php"; ?>
    <!-- end header-->

    <?php

       $_SESSION['edit_id'] =$_GET['id'];

       $pid=$_SESSION['edit_id'];
       

    ?>

     <!-- edit form-->
     <div class="container">
        <div class="container">
            <form action="edit_to_db/selling_price.php" method="GET">
                <input type="text" class="form-control" placeholder="new selling_price" name="new_price">
                <input type="hidden" name="pid" value="<?php echo "$pid";?>"></input>
                <input type="submit" class="btn btn-primary mt-2" placeholder="new name">
            </form>
        </div>

    </div>

    <!-- end of edit form-->

    

    
<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>