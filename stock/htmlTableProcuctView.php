<?php
require "../database/dbc.php";
//global $dbc;
//$dbc = Database::connect_default();
$sql = "SELECT * FROM product";
$result = $dbc->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo    "<tr  class='w3-hover-pale-blue'>
        <td class='w3-mobile'>" . $row["product_id"] . "</td>
        <td class='w3-mobile'>" . $row["product_name"] . "</td>
        <td class='w3-mobile'>" . $row["user_id"] . "</td>
        <td class='w3-mobile'>" . $row["selling_price"] . "</td>
        <td class='w3-mobile'>" . $row["buying_price"] . "</td>
        <td class='w3-mobile'>" . $row["units"] . "</td>
    </tr>";
    }
}
?>