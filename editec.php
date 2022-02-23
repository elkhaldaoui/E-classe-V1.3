<?php
$id = $_GET['id'];
include 'config/db.php';
include 'controller/logout.php';
include 'assets/navbar.php';
if(!$_SESSION['login']){
    header("location:index.php");
    die;
}

$queery = "SELECT * FROM course WHERE id=$id ";
$results = mysqli_query($conn,$queery);
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
        <label for="name">Teacher Name:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" value="<?php echo $row['name']?>">
      </div>
      <div class="form-group">
        <label for="course">COURSE:</label>
        <input type="text" class="form-control" id="course" placeholder="Enter email" name="course" value="<?php echo $row['course']?>">
      </div>
      <div class="form-group">
        <label for="phone">INFO:</label>
        <textarea class="form-control" id="info" name="info"  rows="3"><?php echo $row['info']?></textarea>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Are you sure</label>
      </div>
    <button class="btn btn-primary" name="update"  type="submit">Update</button>
  </form>
</div>
<?php

  if (isset($_POST['update'])) {
    
  $name = $_POST['name'];
  $course = $_POST['course'];
  $info = $_POST['info'];
  


  $sql= "UPDATE course
  SET name='$name', course='$course', info='$info' WHERE id = $id";
  $result= mysqli_query($conn, $sql);
  echo "<script>window.location.href = 'course.php';</script>";
  }
?>

<?php
include './js.php';
?>