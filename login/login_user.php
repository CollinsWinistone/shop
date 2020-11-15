<?php

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
$test=$logInUser->login($email,$password);

//check if only one result is returned
if($test ==1)
{
    header("Location: ../index.php");
}
else
{
    echo "failed miserabely...";
}





