<?php

session_start();

/**
 * This script gets the user input and redirect them
 * accordingly based on the validity of their credentials
 * It logs in a user
 */
include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/user.php";
include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/cosa_db.php";
include "{$_SERVER['DOCUMENT_ROOT']}/dary/config/config.php";

/*---login creadentials ------*/
if(isset($_POST['email']) && isset($_POST['password']))
{
    $log_array = [
        'email'=>$_POST['email'],
        'password'=>$_POST['password']
    ];
}
else
{
    $log_array = [
        'email'=>'collinssimiyu85@gmail.com',
        'password'=>'salama'
    ];
}

$db = Database::connect_default();
$user = new User;

if($user->login($db,$log_array))
{
    /*--set user session---*/
    /*$_SESSION['user_id']=$user->getUserId();
    $user->getRedirectRequest()->redirect(LOGIN_URL);*/
    
    echo "success";
    

}
else
{
    echo "Username or password is incorrect";
}




