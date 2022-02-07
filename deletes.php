<?php
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM students ";
$results = mysqli_query($connection,$queery);
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM students WHERE id=$id");
$_SESSION['message'] = "Address deleted!"; 
echo "<script>window.location.href = 'Students.php';</script>";