<?php

session_start();

class Stock
{
    private $user_id;
    
    public function addStockToDatabase($prod_name,$user_id,$price,$buying_price,$units)
    {
        //include the database file
        include "../database/dbc.php";
        $this->user_id=$_SESSION['user_id'];

        
        $query="INSERT INTO product (product_name,user_id,price,buying_price,units) VALUES ('$prod_name','$this->user_id','$price','$buying_price','$units')";
        $result=mysqli_query($dbc,$query);
        
        //check if mysql object was returned
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function  getUserId()
    {
        return $this->user_id;
    }

}

?>