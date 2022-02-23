<?php
$id = $_GET['id'];
include 'config/db.php';
include 'controller/logout.php';
include 'assets/navbar.php';
if(!$_SESSION['login']){
    header("location:index.php");
    die;
}
$queery = "SELECT * FROM students WHERE id = $id ";
$results = mysqli_query($conn, $queery);
$row = mysqli_fetch_assoc($results);
if (!$results){
die ('FAILED');
}
?>
<style>
#form{
  margin: 10%;
}
</style>

<div class="container">
    <br><br>
  <form method="POST" id="form" >
  <div class="form-group">
        <input type="hidden" class="form-control" id="id"  name="id" value="<?php echo $row['id']?>">
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" value="<?php echo $row['name']?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email']?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone number" name="phone" value="<?php echo $row['phone']?>">
      </div>
      <div class="form-group">
        <label for="enroll">Enroll Number</label>
        <input type="number" class="form-control" id="enroll" placeholder="Enter enroll number" name="enroll" value="<?php echo $row['enroll_Number']?>">
      </div>
      <div class="form-group">
        <label for="date">Date of admission:</label>
        <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date" value="<?php echo $row['date']?>">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Are you sure</label>
      </div>
    <button class="btn btn-primary" type="submit"  name="update">Update</button>
  </form>
</div>

<?php

  if (isset($_POST['update'])) {
    
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $enroll = $_POST['enroll'];
  $date = $_POST['date'];

  $sql= "UPDATE students
  SET name='$name', email='$email', phone='$phone', enroll_Number = '$enroll', date='$date' WHERE id = $id";
  $result= mysqli_query($conn, $sql);
  echo "<script>window.location.href = 'Students.php';</script>";
  }
?>

<?php
include './js.php';
?>