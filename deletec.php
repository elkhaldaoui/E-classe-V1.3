<?php
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM course ";
$results = mysqli_query($connection,$queery);
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM course WHERE id=$id");

echo "<script>window.location.href = 'course.php';</script>";
