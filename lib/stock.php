<?php
/**
*This class offers functionality that helps in different
*operations of stock for a particular user
*@author Collins Simiyu Wanjala
**/

include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/sales_stats.php";
class Stock
{
    private $id; //stock id
    private $item_name;//stock name
    private $date_added;//date the stock was added
    private $u_stock;//the stock associated with the current user
    public  $sales_stats;//associated sales stats for the current user
    
    public function __construct()
    {
        $this->sales_stats = new SalesStats;
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
        $selling_price = $stock['selling_price'];
        $buying_price = $stock['buying_price'];
        $units = $stock['units'];

        //sql query
        $sql = "INSERT INTO product (product_name,user_id,selling_price,buying_price,units)
                VALUES (?,?,?,?,?)";

        /* Prepare statement */
        $stmt = $db->prepare($sql);
        if(!$stmt)
        {
            echo "Error: ".$db->error;

        }

        /* Bind parameters */
        $stmt->bind_param("siiii",$product_name,$user_id,$selling_price,$buying_price,$units);

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
    public function removeItem(mysqli $db,int $user_id,int $product_id)
    {
        $sql = "DELETE FROM product 
                WHERE user_id ='$user_id'
                AND product_id = '$product_id'";
        
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
                $data[$count]['selling_price'] = $row['selling_price'];
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
    public function isEnoughUnits(mysqli $db,int $product_id,int $req_units)
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
    public function sellProduct(mysqli $db ,int $product_id,int $req_units,int $user_id)
    {
        //check to ensure there is enough units
        $is_units_available = $this->isEnoughUnits($db,$product_id,$req_units);

        //if enough stock is available sell the product
        
        if($is_units_available)
        {
            $sql = "UPDATE product 
                SET units = units-$req_units
                WHERE user_id='$user_id'
                AND product_id = '$product_id'";

            $result = $db->query($sql);

            //check if the query was a success
            if($result)
            {
                $prices = $this->sales_stats->getSalesPrices($db,$user_id,$product_id);
                $profit = $this->sales_stats->computeProfit($prices,$req_units);

                //update profit
                $success = $this->sales_stats->updateProfit($db,$profit,$user_id);
                if($success)
                {
                    echo "success";
                }
                else
                {
                    echo "update_failure";
                }

                
            }
            else
            {
                echo "failure";
            }
        }
        

    }
    //end sell product
    

    
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
