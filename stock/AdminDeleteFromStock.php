<?php
require "../lib/stockManager.php";
$stock = new Stock();        //create instance of stock

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["product_id"];
    $succeded = $stock->deleteFromStock($id);
    if ($succeded) {
        echo "Update made successufully.";
    } else {
        echo "unable to update.";
    }

    $_SESSION["succeded"] = $succeded;
    $_SESSION["tabName"] = "delete";

    if ($succeded) {
        echo "successfully added";
        header("Location: /Admin/admin.php");
    } else {
        echo "failed to add item";
    }
}

?>