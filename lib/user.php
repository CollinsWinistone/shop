<?php

/**
 * Description of what this does.
 *This class models the user of cosa word shop market
 * such as login ,logout,register,add stock etc
 *
 * @author    Collins Simiyu Wanjala
 */

 class User
 {
     private $user_id ;//user id
     private $username;//username 
     private $password;//password of the user
     private $email;//email address of the user
     private $stock;//the stock associatd to the user

     public function __construct()
     {
         //constructor function
     }

     public function register()
     {
         //register a user to the site
        echo "log in success";
     }

     public function login()
     {
         //logs in a user to the site

     }

     public function changeProfile()
     {
         //cganges the user profile
     }

     public function sendFeedback()
     {
         //allows the user to send feedback to the developers of the site
     }

 }

?>
