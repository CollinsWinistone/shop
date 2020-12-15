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

     /**
      * Registers a user to the site
      *
      * @param mysqli $db
      * @param array $user_data
      * @return void
      */
     public function register(mysqli $db,array $user_data)
     {
        $email = $user_data['email'];
        $contact = $user_data['contact'];
        $password = $user_data['password'];
        $first_name = $user_data['first_name'];
        $last_name = $user_data['last_name'];

        $sql = "INSERT INTO user_info (first_name,last_name,email,contact,password)
                VALUES (?,?,?,?,?)";

        $stmt = $db->prepare($sql);
        if(!$stmt)
        {
            echo "Error: ".$db->error;

        }

        $stmt->bind_param("sssss",$first_name,$last_name,$email,$contact,$password);
        /* execute statement */
        $stmt->execute();

        //closing the statement
        $stmt->close();
        //closing the connection
        $db->close();

     }

     public function login(mysqli $db,array $credentials)
     {
         $email = $credentials['email'];
         $password = $credentials['password'];

         $sql = "SELECT email,password,contact
                FROM user_info
                WHERE email='$email'
                AND password='$password'";

        $result = $db->query($sql);

        if($result->num_rows == 1)
        {
            
            while($row = $result->fetch_assoc())
            {
                echo $row['contact'];
            }
            
        }
        else
        {
            echo "no values available";
        }

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
