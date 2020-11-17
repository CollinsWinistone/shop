<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<style type="text/css">
    body {
        text-align: center;
    }

    body h3 {
        color: blue;
    }

    img {
        padding: 50px 10px;
    }

    li {
        font-size: 25px;
        font-weight: bold;
        font-family: sans-serif;
    }
</style>

<body>


    <body>












        <div id="sectionContainer">
            <header>
                <p>the header goes here</p>

            </header>
            <!--- navigation bar-->

            <nav id="home_navigation">
                <ul id="menu">
                    <li>Products</li>
                    <li>Statistics</li>
                    <li>Settings</li>
                </ul>
            </nav>
            <section id="catalog">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sell</th>
                        </tr>
                    </thead>

                    <!-- php script to retrieve records from database-->
                    <tbody>
                        <?php

                        $user_id = $_SESSION['user_id'];

                        include "database/dbc.php";
                        $query = "SELECT product_id,product_name,price ,units,buying_price
                FROM product
                WHERE user_id=$user_id";
                        $results = mysqli_query($dbc, $query);

                        while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                            $pid = $row['product_id'];
                            $pn = $row['product_name'];
                            $pr = $row['price'];
                            $un = $row['units'];
                            $bp = $row['buying_price'];
                            echo
                                "<tr>
                <th scope=\"row\">$pid</th>
                <td>$pn</td>
                <td>$pr</td>
                <td><a href=\"buy/buy_item_db.php?pid=$pid&pn=$pn&pr=$pr&un=$un&bp=$bp\" class=\" btn btn-primary\">sell</td>
            </tr>";

                            //echo "<a href=\"buy/buy_item_db.php?pid=$pid&pn=$pn&pr=$pr&un=$un&bp=$bp\">sell</a><br>";
                        }

                        ?>

                        <!-- end of php script to retrieve product data-->

                    </tbody>
                </table>

                <!--  logo section -->
                <div id="logo">
                    <h3 class="inline">Dary Shop</h3>
                    <h3 class="inline" id="test">Logged in as Person</h3>
                </div>

            </section>
            <aside>
                <p>Here we goes the adds</p>

            </aside>
            <footer>
                <P>&copy; 2020 KEMSA SHOPS</P>
            </footer>



        </div>

        C:\Users\USER\Desktop\tricky\shop\mingled\gridEX1.html

        </did>
    </body>

</html>