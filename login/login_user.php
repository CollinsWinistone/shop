<?php


session_start();

include "../lib/user.php";

if(isset($_POST['email']))
{
    $email=$_POST['email'];
}
else
{
    $email=null;
}

if(isset($_POST['password']))
{
    $password=$_POST['password'];
}
else
{
    $password=null;
}




$logInUser=new user;
$success=$logInUser->login($email,$password);


//check if only one result is returned
if($success)
{   
    //retrieve user id
    $_SESSION['user_id']=$logInUser->getUserId();
    $_SESSION['first_name']=$logInUser->getName();
    

    header("Location: ../index.php");
    
}
else
{
    echo "failed miserabely...";
}





