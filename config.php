<?php

//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dtbs = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dtbs);


if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

?>
