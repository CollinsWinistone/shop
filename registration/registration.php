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


    <!-- header-->

    <div class="container-fluid bg-dark">

        <h1 class="display-4 w-100 text-light">Naomi Shop</h1>

    </div>
    <!-- end of header-->

    <!--start of registration form-->
    <div class="container">
        <div class="container w-75 mx-auto">
            <form action="add_user.php" method="POST">
                <input type="text" name="first_name" placeholder="first name" class="form-control form-group-lg">
                <input type="text" name="last_name" placeholder="last name" class="form-control form-group-lg">
                <input type="text" name="contact" placeholder="contact" class="form-control form-group-lg">
                <input type="email" name="email" placeholder="email" class="form-control form-group-lg">
                <input type="text" name="password" placeholder="password" class="form-control form-group-lg">
            

                <input type="submit" value="Register" class="btn btn-primary">
            </form>
        </div>
    </div>
    
    <!-- end of registration form-->

    


<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>