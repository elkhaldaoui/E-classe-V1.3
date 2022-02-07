<?php
$id = $_GET['id'];
include 'assets/navbar.php';
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM students WHERE id=$id ";
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
        <label for="date">Date of admission:</label>
        <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date" value="<?php echo $row['date']?>">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Are you sure</label>
      </div>
    <a class="btn btn-primary" href="Students.php" role="button">Submit</a>
  </form>
</div>

<?php
include './js.php';
?>