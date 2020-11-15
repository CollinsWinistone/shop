<?php



class user 
{
    //variable declaration

    
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
        $this->$email=$email;
        $this->$password=$password;

        //retrieve the data from the database
        $q="SELECT email,password
            FROM user_info
            WHERE email='$email' AND password='$password'";

        //run the query
        $result=mysqli_query($dbc,$q);
        $count=mysqli_num_rows($result);

        return $count;
        




    }
}

?>