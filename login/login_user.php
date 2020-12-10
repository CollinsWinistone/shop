<?php


session_start();

include "../lib/user.php";
//echo "<h1> hello guys </h1>";


if(isset($_POST['login']))
{
    echo "<h1> hello guys </h1>";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $logInUser = new user;
    $success = $logInUser->login($email, $password);

    //check if only one result is returned
    if ($success) {
        //retrieve user id
        $_SESSION['user_id'] = $logInUser->getUserId();

        header("Location: ../index.php");
    } else {
        sleep(2);
        //header("location: /login\login.php");
        echo "failed miserabely...";
    }


}






