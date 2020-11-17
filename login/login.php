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

    <!-- end of header-->
    <!-- quote section-->

    <div class="container w-75 blockquote align-self-center">
        <p class="text-lead text-dark text-center">"We work tirelessly hard to help you do business smoothly"</p>
    </div>

    <!-- end of quote section-->

    <!-- end of header-->
    <div class="container">
        
        <!-- login form container-->
        <div class="container w-75 mx-auto">

             <div>

                <!-- start of login form -->
                <form action="login_user.php" method="POST" autocomplete="off">
                    <input type="email" name="email" placeholder="email" class="form-control form-control-lg" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <input type="password" name="password" placeholder="passowrd" class="form-control form-control-lg mb-2">
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
                <!--end of login form -->

            </div>

        </div>
        <!-- end of login form container-->
       

    </div>
    

    

<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>