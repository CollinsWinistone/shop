<?php

include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/user.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/config/config.php";

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




    


?>