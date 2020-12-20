<?php

include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/cosa_db.php";
include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/user.php";


/**
* @author Collins Simiyu
* This script adds a new user to the site
*/

/*--datbase connection--*/
$db = Database::connect_default();

/*--registration credentials --*/
if(isset($_POST['first_name']) &&
   isset($_POST['last_name'])  &&
   isset($_POST['contact'])    &&
   isset($_POST['email'])      &&
   isset($_POST['password']))
   {
        $reg_data = [
            'first_name'=>$_POST['first_name'],
            'last_name'=>$_POST['last_name'],
            'contact'=>$_POST['contact'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password']
        ];
   }
   else
   {
        $reg_data = [
            'first_name'=>'collins',
            'last_name'=>'cosiwa',
            'contact'=>'0710153980',
            'email'=>'cosy@gmail.com',
            'password'=>'cosa_world'
        ];
    }
$db = Database::connect_default();
$user = new User;
$user->register($db,$reg_data);
if($user->register($db,$reg_data))
{
    $location=$user->reg_redirect();
    header("location:{$location}");
    
}
else
{
    echo "Try again";
}



    


?>