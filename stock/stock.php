<?php session_start();?>
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
    <!-- header-->

    <?php include "../include_files/header.php"; ?>

    <!-- end of header-->
    <!-- capital section-->
    

    <section>
        <div class="container">
            <div class="container">
                    <!-- start of new item-->
   
                    <a href="add_new_item.php" class="list-group-item list-group-item-action active mb-2">Add new item</a>

                    <!-- end of new itemm-->
                    <form action="#" method="POST">
                    <input type="text" name="capital" placeholder="Starting capital" class="form-control form-group-lg mb-2">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>

            </div>

        </div>
    </section>

    <!-- end of capital section-->
<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>