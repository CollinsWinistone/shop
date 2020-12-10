<?php
session_start();
?>
<?php
require "../lib/stockManager.php";
$stock = new Stock();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $user_id =intval( $_POST["user_id"]);
    $price =(double) $_POST["price"];
    $buying_price =doubleval( $_POST["buying_price"]);
    $unit =intval( $_POST["unit"]);

   /*  $product_name = "pen";
    $user_id = 1;
    $price = 20.30;
    $buying_price = 20.30;
    $unit = 1; */
    $succeded = $stock->addStockToDatabase($product_name, $user_id, $price, $buying_price, $unit);
    $_SESSION["succeded"] = $succeded;
    $_SESSION["tabName"] = "add";
    if($succeded)
    {
        echo "successfully added";
        header("Location: /Admin/admin.php");
    }
    else
    {
        echo "failed to add item";
    }
    

}
