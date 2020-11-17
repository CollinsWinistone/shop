<?php

include "database/dbc.php";

$email = $_POST['email'];
$password = $_POST['password'];

$q = "SELECT email,password FROM user_info WHERE email='$email' AND password='$password'";
$result = mysqli_query($dbc, $q);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "success bro.imefanya";
} else {
    echo "hakuna matokeo";
}

?>

<div id="mainContainer">
    <header id="mainNav">
        <?php
        session_start();
        include "include_files/header.php";

        ?>
    </header>
    <nav id="leftNav">

    </nav>
    <section id="allContentContainer">
       
    </section>
    <aside id="adsContainer">

    </aside>
    <footer id="foot">

    </footer>

</div>