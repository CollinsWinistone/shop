<?php
/**
 * This class describes various ways to find sales statistics
 * @author Collins Simiyu
 */

 class SalesStats
 {
     /**
      * Computes the profit for a particular transaction
      *
      * @param array $sales_prices
      * @param integer $units_sold
      * @return int Profit gained from sales
      */
     public function computeProfit(array $sales_prices,int $units_sold)
     {
        $selling_price = $sales_prices['selling_price'];
        $buying_price  = $sales_prices['buying_price'];
        $units_purchased = $sales_prices['units_purchased'];

        $expected_profit = $selling_price - $buying_price;
        $profit_for_one_unit = ($selling_price/$units_purchased) - ($buying_price/$units_purchased);

        $profit_gained = $profit_for_one_unit * $units_sold;

        return $profit_gained;

        
     }

     /**
      * Gets the selling and buying prices of different items
      *
      * @param mysqli $db
      * @param integer $user_id
      * @param integer $product_id
      * @return array The selling and buying selling_price of the item
      */
     public function getSalesPrices(mysqli $db,int $user_id,int $product_id)
     {
        $data = [];
        
        $sql = "SELECT selling_price,buying_price,units_purchased
                 FROM product
                 WHERE product_id = '$product_id'
                 AND user_id = '$user_id'";

        $result = $db->query($sql);

        if($result)
        {
            
            while($row = $result->fetch_assoc())
            {
                $data['selling_price'] = (int) $row['selling_price'];
                $data['buying_price'] = (int) $row['buying_price'];
                $data['units_purchased'] = (int) $row['units_purchased'];

                
            }
            return $data;
        }
        else
        {
            $array = [
                'value'=>'no data retrieved'
            ];

            return $array;
        }
        
        

     }
     /**
      * Updates profit/loss
      * Updates a profit or loss after the sell of
      * a particular item
      *
      * @param mysqli $db
      * @param integer $profit
      * @param integer $user_id
      * @return bool
      */
     public function updateProfit(mysqli $db,int $profit,int $user_id)
     {
        $sql = "UPDATE user_info
                SET profit = profit + $profit
                WHERE user_id = $user_id";
        
        $result = $db->query($sql);

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
     }

     //end of update profit

     /**
      * Undocumented function
      *
      * @param mysqli $db the database instance
      * @param integer $user_id 
      * @return array $data the user profit information
      */
    public function getProfitOnSales(mysqli $db,int $user_id)
    {
        $data = [];//array to hold user profit
        $sql = "SELECT profit 
                FROM user_info
                WHERE user_id = $user_id";

        $result = $db->query($sql);

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                $data['profit'] = $row['profit'];
            }
        }

        return $data;
    }
 }

?>