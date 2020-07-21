<?php
$servername = "localhost";
$username = "root";
$password = "akku";
$dbname = "project";
// Create connection
$connection = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

?>