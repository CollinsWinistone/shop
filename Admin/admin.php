<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/styles//bootsrap/css/w3.css">
    <script src="/js/jqery.js"></script>
</head>

<body>
    <header>

    </header>
    <nav>

    </nav>
    <section>
        <div class="w3-bar, w3-black">
            <button class="open w3-button w3-bar-item" id="view">View Items</button>
            <button class="open w3-button w3-bar-item" id="add">Add Items</button>
            <button class="open w3-button w3-bar-item" id="update">Update Items</button>
            <button class="open w3-button w3-bar-item" id="delete">Delete Items</button>
        </div>
        <div>
            <div class="query view w3-animate-top   w3-container w3-panel w3-padding">
                <table class="w3-table w3-striped w3-hoverable ">

                    <thead>
                        <tr class="w3-pale-blue">
                            <th class="w3-large"> Product id </th>
                            <th class="w3-large"> Product Name </th>
                            <th class="w3-large"> User id </th>
                            <th class="w3-large"> Price </th>
                            <th class="w3-large"> Buying price </th>
                            <th class="w3-large"> Units </th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php
                        include "../database/dbc.php";
                        $sql = "SELECT * FROM product";
                        $result = $dbc->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo    "<tr  >
                            <td class='w3-mobile'>" . $row["product_id"] . "</td>
                            <td class='w3-mobile'>" . $row["product_name"] . "</td>
                            <td class='w3-mobile'>" . $row["user_id"] . "</td>
                            <td class='w3-mobile'>" . $row["price"] . "</td>
                            <td class='w3-mobile'>" . $row["buying_price"] . "</td>
                            <td class='w3-mobile'>" . $row["units"] . "</td>
                        </tr>";
                            }
                        }
                        ?>
                    </tbody>

                </table>
            </div>
            <div class="query add w3-hide  w3-animate-bottom  w3-container w3-panel w3-padding">
                <form action="/stock/adminAddStock.php" method="post" style="width: 40%;">
                    <label for="product_id">Product Id</label>
                    <input type="text" name="product_id" class="w3-input w3-bottombar w3-border-blue">
                    <label for="product_name">Product name</label>
                    <input type="text" name="product_name" class="w3-input w3-bottombar w3-border-blue">
                    <label for="user_id">User id</label>
                    <input type="text" name="user_id" class="w3-input w3-bottombar w3-border-blue">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="buying_price">Buying price</label>
                    <input type="text" name="buying_price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="unit">Unit</label>
                    <input type="text" name="unit" class="w3-input w3-bottombar w3-border-blue">
                    <input type="file" name="image">
                    <?php
                    include "/include_files/confermStockModification.php"
                    ?>

                    <button class="w3-button w3-green w3-margin-top w3-ripple w3-block">Add</button>

                </form>
            </div>
            <div class="query update w3-animate-top  w3-hide w3-container w3-panel w3-padding">
                <?php
                include "../stock/adminUpdateStock.php";
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" style="width: 40%;">
                    <label for="product_id">Product Id</label>
                    <input type="text" name="product_id" require class="w3-input w3-bottombar w3-border-blue">
                    <label for="product_name">Product name</label>
                    <input type="text" name="product_name" class="w3-input w3-bottombar w3-border-blue">
                    <label for="user_id">User id</label>
                    <input type="text" name="user_id" class="w3-input w3-bottombar w3-border-blue">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="buying_price">Buying price</label>
                    <input type="text" name="buying_price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="unit">Unit</label>
                    <input type="text" name="unit" class="w3-input w3-bottombar w3-border-blue">
                    <input type="file">

                    <?php
                    include "../include_files/confermStockModification.php"
                    ?>
                    <button class="w3-button w3-yellow w3-margin-top w3-ripple w3-block">UPdate</button>


                </form>
            </div>

            <div class="query delete w3-hide w3-animate-left w3-container w3-panel w3-padding">
                <form action="/stock/AdminDeleteFromStock.php" method="post" style="width: 40%;">
                    <label for="product_id">Product Id</label>
                    <input type="text" name="product_id" class="w3-input w3-bottombar w3-border-blue">
                    <?php
                    include "/include_files/confermStockModification.php"
                    ?>
                    <button class="w3-button w3-red w3-margin-top w3-ripple w3-block">Delete</button>
                </form>
            </div>
        </div>

    </section>
    <script src="../js/tabControls.js"></script>
</body>

</html>