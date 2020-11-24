<?php



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

    public function getAllProducts()
    {
        include "../database/dbc.php";
        $this->user_id=$_SESSION['user_id'];
        $q="SELECT product_name,price,units,product_id
            FROM product
            WHERE user_id='$this->user_id'";

        $available_stock=mysqli_query($dbc,$q);
       
        if($available_stock)
        {
            while( $row=mysqli_fetch_array($available_stock,MYSQLI_ASSOC))
            {
                echo 
                "<tr>
                    <th scope=\"row\">{$row['product_id']}</th>
                    <td>{$row['product_name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['units']}</td>
              </tr>";
            }
        }
        else
        {
            echo "Error<br>".mysqli_error($dbc);
        }
    }

}

?>