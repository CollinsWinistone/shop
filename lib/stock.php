<?php
/**
*This class offers functionality that helps in different
*operations of stock for a particular user
*@author Collins Simiyu Wanjala
**/


class Stock
{
    private $user_id;
    /**
    *adds stock to the database
    *@param prod_name - the name of the product
    *@param user_id - the id of the current user
    *@param buying_price - the buying price of a particular item
    *@param units - the number of units of te particular item
    */
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
    /**
    *@return this->user_id - returns the current user id
    */
    public function  getUserId()
    {
        return $this->user_id;
    }

    /**
    *prints all products available in the site
    */
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
                $id=$row['product_id'];
                $product_name=$row['product_name'];
                $price=$row['price'];
                $units=$row['units'];
                echo
                "<tr>
                    <th scope=\"row\">
                    <a href=\"#\" class=\"btn btn-primary\">about</a></th>
                    <td><a href=\"http://192.168.43.130:8080/dary/edit/edit_name.php?id=$id\" class=\"\">$product_name</a></td>
                    <td><a href=\"http://192.168.43.130:8080/dary/edit/edit_price.php?id=$id\" class=\"\">$price</a></td>
                    <td><a href=\"http://192.168.43.130:8080/dary/edit/edit_unit.php?id=$id\" class=\"\">$units</a></td>
              </tr>";
            }
        }
        else
        {
            echo "Error<br>".mysqli_error($dbc);
        }


    }
    /**
    *@param product_id - the id of the product to be edited
    *@param new_name - the new name to be set for the product
    */
    public function editName($product_id,$new_name)
    {
        include "../../database/dbc.php";
        $q="UPDATE product
            SET product_name='$new_name'
            WHERE product_id=$product_id";

        $result=mysqli_query($dbc,$q);

        if($result)
        {
            if(mysqli_affected_rows($dbc) >=1)
            {

                header("Location:http://192.168.43.130:8080/dary/statistics/statistics.php");
                exit();
            }
            else
            {
                echo "<h1>An error occured</h1>";
            }
        }
        else
        {
            echo mysqli_error($dbc);
        }
    }
    /**
    *@param product_id - the id of the product to be edited
    *@param new_price - the new price to be set for the product
    */
    public function editPrice($product_id,$new_price)
    {
        include "../../database/dbc.php";
        $q="UPDATE product
            SET price='$new_price'
            WHERE product_id=$product_id";

        $result=mysqli_query($dbc,$q);

        if($result)
        {
            if(mysqli_affected_rows($dbc) >=1)
            {

                header("Location:http://192.168.43.130:8080/dary/statistics/statistics.php");
                exit();
            }
            else
            {
                echo "<h1>An error occured</h1>";
            }
        }
        else
        {
            echo mysqli_error($dbc);
        }

    }
    /**
    *@param product_id - the id of the product to be edited
    *@param new_units - the new units to be set for the product
    */
    public function editUnits($product_id,$new_units)
    {
        include "../../database/dbc.php";
        $q="UPDATE product
            SET units='$new_units'
            WHERE product_id=$product_id";

        $result=mysqli_query($dbc,$q);

        if($result)
        {
            if(mysqli_affected_rows($dbc) >=1)
            {

                header("Location:http://192.168.43.130:8080/dary/statistics/statistics.php");
                exit();
            }
            else
            {
                echo "<h1>An error occured</h1>";
            }
        }
        else
        {
            echo mysqli_error($dbc);
        }

    }

}

?>
