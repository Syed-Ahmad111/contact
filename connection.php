<?php
// Database connection settings
$servername = "localhost";  // Your database server, often "localhost"
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "Vigo";  // The name of your database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
