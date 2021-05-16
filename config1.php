<?php
$servername = "localhost";
$username = "kali";
$password = "kali";
$dbname = "class";

// Create connection
$con1 = mysqli_connect($servername, $username, $password, $dbname);
// $con2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con1->connect_error) {
  die("Connection failed: " . $con1->connect_error);
}
?>