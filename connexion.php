<?php
// ini_set('display_errors', 'on'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonne_boof";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>