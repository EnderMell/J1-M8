<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "module_8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  exit();
} else{
    $connection = true;
}

