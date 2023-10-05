<?php
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "project"; // Change this to your MySQL database name

// Create a connection
$obj = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($obj->connect_error) {
    die("Connection failed: " . $obj->connect_error);
}
?>
