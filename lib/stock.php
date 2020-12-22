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
        //this method adds stock to the database
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

        echo "okay success";

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
    
    /**
     * Checks to see if the there is enough stock
     * Pre-condition - product id must be a valid integer
     * Post-condition - returns true if stock is available
     * @param mysqli $db - the database connection
     * @param integer $product_id - id of the item to be sold
     * @return boolean 
     */
    public function isStockAvailable(mysqli $db,int $product_id,int $req_units)
    {
        $sql = "SELECT units FROM product
                WHERE units >= '$req_units'";

        $result = $db->query($sql);

        //check if results is available
        if($result->num_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    /**
     * Handles selling of goods by the seller
     *
     * @param mysqli $db -database connection
     * @param integer $product_id - product id of the item to be sold
     * @param integer $req_units - number of units to be sold
     * @return void
     */
    public function sellProduct(mysqli $db ,int $product_id,int $req_units)
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
