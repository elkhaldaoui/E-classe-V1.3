<?php
$id = $_GET['id'];
include 'assets/navbar.php';
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM coures WHERE id=$id ";
$results = mysqli_query($connection,$queery);
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
  <form action="/action_page.php" id="form" >
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
    <a class="btn btn-primary" href="course.php" role="button">Submit</a>
  </form>
</div>

<?php
include './js.php';
?>