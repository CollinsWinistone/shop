<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <script src="../styles/fontawesome/js/all.js"></script>
</head>

<body>
    <div id="mainContainer">
        <header id="mainNav">
            <!-- header-->

            <div class="container-fluid bg-dark">

                <h1 class="display-4 w-100 text-light">Naomi Shop</h1>

            </div>
            <!-- end of header-->
            <?php

            include "../include_files/header.php";

            ?>
        </header>
        <nav id="leftNav">

        </nav>
        <section id="allContentContainer">
            <!-- quote section-->

            <div class="container w-75 blockquote align-self-center">
                <p class="text-lead text-dark">"We work tirelessly hard to help you do business smoothly"</p>
            </div>

            <!-- end of quote section-->

            <!-- end of header-->
            <div class="container">

                <!-- login form container-->
                <div class="container w-75 mx-auto">

                    <!-- start of login form -->
                    <form action="login_user.php" method="POST">
                        <input type="email" name="email" placeholder="email" class="form-control form-control-lg" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <input type="password" name="password" placeholder="passowrd" class="form-control form-control-lg mb-2">
                        <input type="submit" name="login" value="login" class="btn btn-primary">
                    </form>
                    <!--end of login form -->

                </div>
                <!-- end of login form container-->




        </section>
        <aside id="adsContainer">

        </aside>
        <footer id="foot">

        </footer>

    </div>



    <script src="../js/jqery.js"></script>
    <script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>

</html>