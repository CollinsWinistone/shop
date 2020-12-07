<?php
require "../database/dbc.php";

class Stock
{

     function addStockToDatabase($product_name,$user_id,$price,$buying_price,$unit)
    {
        //include the database file
        global $dbc;
        $sql = $dbc->prepare("INSERT INTO product 
        (product_name,user_id,price,buying_price,units) VALUES (?,?,?,?,?)");
        $sql->bind_param("siddi", $product_name, $user_id, $price, $buying_price, $unit);
        $succeded = $sql->execute();
        return $succeded;
    
    }
    public function  deleteFromStock($id)
    {
        global $dbc;

        $sql = "DELETE FROM product WHERE product_id= $id";
        $succeded = $dbc->query($sql);
        return $succeded;
    }

    public function updateStock($id,$PropertyValues)
    {
        global $dbc;
        $sql = "UPDATE product SET $PropertyValues WHERE product_id=$id" ;
        $succeded = $dbc->query($sql);
        
        return $succeded;
    
    }
}

?>