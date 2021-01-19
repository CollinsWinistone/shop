<?php
$host="localhost";
$port=5505;
$socket="";
$user="root";
$password="password";
$dbname="dary";

$dbc = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

//$dbc=mysqli_connect("localhost","root","","dary");



?>