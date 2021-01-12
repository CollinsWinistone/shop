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
      * @return array The selling and buying price of the item
      */
     public function getSalesPrices(mysqli $db,int $user_id,int $product_id)
     {
        $data = [];
        
        $sql = "SELECT selling_price,buying price,units
                 FROM product
                 WHERE product_id = $product_id";

        $result = $db->query($sql);

        if($result->num_rows > 0)
        {
            $count =0;
            while($row = $result->fetch_assoc())
            {
                $data[$count]['selling_price'] = $row['selling_price'];
                $data[$count]['buying_price'] = $row['buying_price'];
                $data[$count]['units_purchased'] = $row['units'];

                $count ++;
            }
            return $data;
        }
        
        

     }
     /**
      * Updates profit/loss
      * Updates a profit or loss after the sell of
      * a particular item
      *
      * @param mysqli $db
      * @param integer $user_id
      * @param integer $product_id
      * @return void
      */
     public function updateProfit(mysqli $db,int $profit,int $user_id)
     {
        $sql = "UPDATE sales_statistics
                SET profit = $profit
                WHERE user_id = $user_id";
        
        $result = $db->query($sql);

        if($result)
        {
            echo "success";
        }
        else
        {
            echo "failure";
        }
     }
 }

?>