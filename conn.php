<?php
// DB connection parameters 
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cars_rss";

// Create the DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the DB connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>