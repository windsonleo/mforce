<?php

//CONFIG
$data_base = "mforce";
$host = "localhost";
$user = "root";
$password = "";

// Create connection
$connection = new PDO("mysql:dbname=$data_base;host=$host", $user, $password);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//echo '<head><link rel="stylesheet" type="text/css" href="styles.css"></head>';
?>