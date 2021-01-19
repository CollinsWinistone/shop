<?php

/**
 * Description of what this does.
 *This class models the user of cosa word shop market
 * such as login ,logout,register,add stock etc
 *
 * @author    Collins Simiyu Wanjala
 */

 include "{$_SERVER['DOCUMENT_ROOT']}"."/shop/lib/stock.php";
 include "{$_SERVER['DOCUMENT_ROOT']}"."/shop/lib/redirects.php";
 class User
 {
     private $user_id ;//user id
     private $username;//username 
     private $password;//password of the user
     private $email;//email address of the user
     private $u_stock;//the stock associated to the user
     private $redirect;//the redirect object for the current user

     

     public function __construct()
     {
         //instantiate a new stock object
         $this->u_stock = new Stock;
         $this->redirect = new RedirectRequest;

     }

     /**
      * Registers a user to the site
      *
      * @param mysqli $db
      * @param array $user_data
      * @return bool
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
        
        echo "<h1>Registration success</h1>";

     }

     /**
      * Logs in a user
      *
      * @param mysqli $db
      * @param array $credentials
      * @return bool
      */
     public function login(mysqli $db,array $credentials)
     {
         $email = $credentials['email'];
         $password = $credentials['password'];

         $sql = "SELECT email,password,contact,user_id
                FROM user_info
                WHERE email='$email'
                AND password='$password'";

        $result = $db->query($sql);

        if($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            $this->user_id = $row['user_id'];
            return true;
            
        }
        else
        {
            return false;
        }

     }

     /**
      * Returns the current user_id
      *
      * @return void
      */
     public function getUserId()
     {
         return $this->user_id;
     }

     /**
      * Returns URL object
      *
      * @return RedirectRequest
      */
     public function getRedirectRequest()
     {
        return $this->redirect;
     }

     public function getUserStock()
     {
        return $this->u_stock;
     }

     public function changeProfile()
     {
         //changes the user profile
         echo "profile pic";
     }

     public function sendFeedback()
     {
         //allows the user to send feedback to the developers of the site
     }

     public function getProfit()
     {
         return 0;
     }

 }

?>
