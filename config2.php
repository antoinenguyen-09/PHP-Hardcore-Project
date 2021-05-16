<?php
$servername = "localhost";
$username = "kali";
$password = "kali";
$dbname = "class";

// Create connection
$con2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con2->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>