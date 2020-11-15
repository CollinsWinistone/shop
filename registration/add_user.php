<?php

    include "../lib/user.php";

    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];

    $addUser=new User;
    //add the user to the database
    $addUser->register($first_name,$last_name,$contact,$email,$password);



    


?>