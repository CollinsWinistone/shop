<?php
if (isset($_SESSION["succeded"])) {
    if ($_SESSION["succeded"]) {
        echo "<h1>Item added successfully</h1>";
    } else {
        echo "<h1>Item was not added </h1>";
    }
}
?>