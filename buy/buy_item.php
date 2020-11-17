<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> title1 </title>
    <link rel="stylesheet" href="../styles/index.css">
</head>

<body>

    <div id="mainContainer">
        <header id="mainNav">
            <?php
            session_start();
            include "../include_files/header.php";

            ?>
        </header>
        <nav id="leftNav">

        </nav>
        <section id="allContentContainer">
            <h1> Hello World </h1>
            <form action="buy_update_db.php" method="POST">
                <input type="text" name="user_units" placeholder="number of items bought"><br>
                <input name="submit" id="" type="submit" value="Submit">
            </form>
        </section>
        <aside id="adsContainer">

        </aside>
        <footer id="foot">

        </footer>

    </div>





</body>
<html>