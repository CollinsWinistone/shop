<?php

//session_start( );

class user 
{
    //variable declaration
    private $user_id;
    private $email;
    private $password;

    
    public function register($first_name,$last_name,$contact,$email,$password)
    {
        

        include "../database/dbc.php";//datbase connection file

        //query to insert user to database
        $q="INSERT INTO user_info (first_name,last_name,email,contact,password) 
            VALUES ('$first_name','$last_name','$email','$contact','$password')";

        //run the query
        $r=mysqli_query($dbc,$q);

        

        if($r)//if OK
        {
            $_SESSION["user_id"] = mysqli_insert_id($dbc);
            header("Location: /index.php");
            echo "<p>Thank you for registering</p><br>";
        }
        else //if it did not run OK
        {
            echo "<h1>System error</h1>"; 
            echo "<p>".mysqli_error($dbc) ."</p><br>";
        }
    }
    
    public function login($email,$password)
    {
      

        include "../database/dbc.php";//database connection file
        $this->email = $email;
        $this->password=$password;
       
        

        //retrieve the data from the database
        $q= "SELECT email,password,user_id
            FROM user_info
            WHERE email='collinssimiyu85@gmail.com' AND password='salama'";

        //run the query
        $result=mysqli_query($dbc,$q);
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        

        if($count == 1)
        {
            $this->user_id = $row['user_id'];
            return true;
        }
        else
        {
            return false;
        }
     
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getProfit()
    {
        include "database/dbc.php";
        $this->user_id=$_SESSION['user_id'];
        $q="SELECT profit
            FROM user_info
            WHERE user_id='$this->user_id'";

        $profit=mysqli_query($dbc,$q);

        if($profit)
        {
            $row=mysqli_fetch_array($profit,MYSQLI_ASSOC);
            return $row['profit'];
        }
        else
        {
            return [false,mysqli_error($dbc)];
        }
    }

    public function getName()
    {
        include "https://192.168.43.130:8080/dary/database/dbc.php";
        $this->user_id=$_SESSION['user_id'];
        
        $q="SELECT first_name
            FROM user_info
            WHERE user_id=$this->user_id";
        $result=mysqli_query($dbc,$q);

        if($result)
        {
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            return $row['first_name'];
        }
        else
        {
            return mysqli_error($dbc);
        }

    }

    

    

}

?>