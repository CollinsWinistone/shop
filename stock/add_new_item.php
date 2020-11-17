<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- start of introduction section-->
    <section>
        <blockquote>
            "Add new item to help us keep track of your records"
        </blockquote>
    </section>
    <!-- end of introduction section-->

    <!--start of form records section-->

    <form action="add_new_item_to_database.php" method="POST">
        <input type="text" name="buying_price" placeholder="buying price"><br>
        <input type="text" name="item_name" placeholder="Item name"><br>
        <input type="text" name="price_per_unit" placeholder="price per unit"><br>
        <input type="text" name="unit" placeholder="unit"><br>
        
        <input type="submit">
        
    </form>

    <!-- end of from records section-->
</body>
</html>