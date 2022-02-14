<?php
    ob_start();
    session_start();

$servername = "localhost";
$username = "root";
$password = "oussama0611O";
$db_name = "e_classe_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>