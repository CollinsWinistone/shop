<?php
/**
*This class offers functionality that helps in different
*operations of stock for a particular user
*@author Collins Simiyu Wanjala
**/


class Stock
{
    private $id; //stock id
    private $item_name;//stock name
    private $date_added;//date the stock was added
    private $u_stock;//the stock associated with the current user
    
    public function __construct()
    {
        //this is the construtor function
    }
   

    /**
     * Adds stock item to the datbase
     *
     * @param mysqli $db
     * @param array $stock
     * @param integer $user_id
     * @return void
     */
    public function addStock(mysqli $db,array $stock,int $user_id)
    {
        //this methos adds stock to the database
        $product_name = $stock['product_name'];
        $user_id = $stock['user_id'];
        $price = $stock['price'];
        $buying_price = $stock['buying_price'];
        $units = $stock['units'];

        //sql query
        $sql = "INSERT INTO product (product_name,user_id,price,buying_price,units)
                VALUES (?,?,?,?,?)";

        /* Prepare statement */
        $stmt = $db->prepare($sql);
        if(!$stmt)
        {
            echo "Error: ".$db->error;

        }

        /* Bind parameters */
        $stmt->bind_param("siiii",$product_name,$user_id,$price,$buying_price,$units);

        /* execute statement */
        $stmt->execute();

        //closing the statement
        $stmt->close();
        //closing the connection
        $db->close();


    }

    /**
     * Removes an item from the database
     *
     * @param mysqli $db
     * @param integer $user_id
     * @return void
     */
    public function removeStock(mysqli $db,int $user_id)
    {
        $sql = "DELETE FROM product 
                WHERE user_id=$user_id";
        
        if($db->query($sql))
        {
            echo "data deleted successfully";
        }
        else
        {
            echo "data deletion failed ".$db->connect_error;

        }


    }


    /**
     * retrieves all data stock stored in the database
     *
     * @param mysqli $db
     * @param int $user_id
     * @return array
     */
    public function availableStock(mysqli $db,int $user_id)
    {
        $data = [];//array to hold returned data
        $sql = "SELECT * FROM product
                WHERE user_id='$user_id'";
        $result = $db->query($sql);

        

        //check if the results available
        if($result->num_rows > 0)
        {
            
            $count = 0;
            //output the dat of each row
            while($row = $result->fetch_assoc())
            {
                $data[$count]['product_id'] = $row['product_id'];
                $data[$count]['product_name'] = $row['product_name'];
                $data[$count]['price'] = $row['price'];
                $data[$count]['buying_price'] = $row['buying_price'];
                $data[$count]['units'] = $row['units'];

                //increment to next data
                $count++;

            }
            return $data;
            
        }
        else
        {
            return $data;
            
        }
    }

    public function sellProduct(mysqli $db ,int $product_id)
    {
        //this handles sell of products
    }

    public function bestSellingStock()
    {
        //returns the best 10 selling goods
    }

    public function worstSellingStock()
    {
        //return the worst selling goods
    }



}

?>
