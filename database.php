<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "dnscobe";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>