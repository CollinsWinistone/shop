<?php
require "../lib/stockManager.php";
$stock = new Stock();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $user_id = intval($_POST["user_id"]);
    $selling_price = (float) $_POST["selling_price"];
    $buying_price = doubleval($_POST["buying_price"]);
    $unit = intval($_POST["unit"]);

    // build a string with properties and values to updated

    $toUpate = "";
    if ($product_name != "") {
        $toUpate = "product_name ='" . $product_name . "' ";
    }
    if ($user_id != 0) {
        $toUpate .= "user_id=" . $user_id;
    }

    if (!is_null($selling_price) && $selling_price != 0) {
        $toUpate .= " selling_price=" . $selling_price;
    }
    if (!is_null($buying_price) && $buying_price != 0) {
        $toUpate .= " buying_price=" . $buying_price;
    }
    if (!is_null($unit) && $unit !=0) {
        $toUpate .= " units=" . $unit . " ";
    }
    //echo "<h1> ".$id ." ". $toUpate. "</h1>";
    $succeded = $stock->updateStock($id,$toUpate);
    if($succeded)
    {
        echo "Update made successufully.";
    }
    else
    {
        echo "unable to update.";
    }
    
   
}
?>