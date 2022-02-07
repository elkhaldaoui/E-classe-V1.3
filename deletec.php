<?php
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM coures ";
$results = mysqli_query($connection,$queery);
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM coures WHERE id=$id");
$_SESSION['message'] = "Address deleted!"; 
echo "<script>window.location.href = 'course.php';</script>";
