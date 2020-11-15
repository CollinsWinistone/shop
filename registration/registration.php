<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header/header.css">
</head>
<body>
    <?php include "../include_files/header.php" ?>

    <!--introduction note-->
    <div>
        <blockquote>
            Thank you for choosing us to help you in your amazing business
        </blockquote>
    </div>
    <!--end of introduction note-->

    <!--start of registration form-->
    <div>
        <form action="add_user.php" method="POST">
            <input type="text" name="first_name" placeholder="first name"><br>
            <input type="text" name="last_name" placeholder="last name"><br>
            <input type="text" name="contact" placeholder="contact"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="text" name="password" placeholder="password"><br>
           

            <input type="submit" value="Register">
        </form>
    </div>
    <!-- end of registration form-->

    <div>

    </div>
</body>
</html>