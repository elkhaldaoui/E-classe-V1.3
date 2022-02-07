<?php
include 'assets/navbar.php';
include 'config/db.php';
// for students
$sqls="SELECT * FROM students";
$results= mysqli_query($conn, $sqls);
$std= mysqli_num_rows($results);
// for courses
$sqlc="SELECT * FROM coures";
$resultc= mysqli_query($conn, $sqlc);
$crs= mysqli_num_rows($resultc);
// for paiments
$sqlp = "SELECT SUM(amount_paid) as sum FROM payment_details";
$resultp= mysqli_query($conn, $sqlp);
$pmt= mysqli_fetch_assoc($resultp);
// for users 
$sqlu="SELECT * FROM users";
$resultu= mysqli_query($conn, $sqlu);
$usr= mysqli_num_rows($resultu);
?>
  
<!--start Dashboard-->
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md col-sm-6 p-2">
                <div class="p-2" style="background: #F0F9FF;border-radius: 6px;">
                    <i class="bi bi-mortarboard fs-3" style="color: #74C1ED;"></i>
                    <p>Student</p>
                    <p class="text-end fw-bold fs-5"><?php  echo $std ?></p>
                                </div>
                            </div>
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: #FEF6FB;border-radius: 6px;">
                                    <i class="bi bi-bookmark fs-3" style="color: #EE95C5;"></i>
                                    <p>Course</p>
                                    <p class="text-end fw-bold fs-5"><?php  echo $crs ?></p>
                                </div>
                            </div>
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: #FEFBEC;border-radius: 6px;">
                                    <i class="bi bi-currency-dollar fs-3" style="color: #74C1ED;"></i>
                                    <p>Payments</p>
                                    <p class="text-end fw-bold fs-5"><?php  echo $pmt['sum'] ?>DHS</p>
                                </div>
                            </div>
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);border-radius: 6px;">
                                    <i class="bi bi-person text-white fs-3"></i>
                                    <p class="text-white">Users</p>
                                    <p class="text-end fw-bold fs-5"><?php  echo $usr ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
 <!--end Dashboard-->
    
<?php
include 'assets/js.php';
?>