<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>DASHBOARD</title>
</head>
<body>
    <!--start sidebar-->
    <div class="container-fluid">
        <div class="row">
            <input type="checkbox" id="menu">
            <div style="background: #FAFFC1;" id="toggel" class="col-md-2 text-center">
                <h2 class="titre text-start"><span class="text-info p-2">|</span>E-classe</h2>
                <hr>
                <img class="rounded rounded-circle" src="img/profile.svg" alt="profile">
                <h4>Admin name</h4>
                <p class="text-info">Admin</p>
                <hr>
                <nav class="text-start p-3">
                    <a class="nav-link text-black" href="dashboard.php">
                        <img class="me-3" src="img/home.svg" alt=""> Home
                    </a>
                    <hr>
                    <a class="nav-link text-black" href="course.php">
                        <img class="me-3" src="img/save.svg" alt=""> Course
                    </a>
                    <hr>
                    <a class="nav-link text-black" href="Students.php">
                        <img class="me-3" src="img/student.svg" alt=""> Students
                    </a>
                    <hr>
                    <a class="nav-link text-black" href="payment.php">
                        <img class="me-3" src="img/payement.svg" alt=""> Payment
                    </a>
                    <hr>
                    <a class="nav-link text-black" href="#">
                        <img class="me-3" src="img/report.svg" alt=""> Report
                    </a>
                    <hr>
                    <a class="nav-link text-black" href="#">
                        <img class="me-3" src="img/setting.svg" alt=""> Settings
                    </a>
                    <hr>
                    <hr>
                </nav>
                <a href="index.php" class="nav-link text-black" id="logout">
                    <img class="bi me-2" src="img/out.svg" alt=""> Logout
                </a>
                <hr>
            </div>
            <div class="col-md">
                <div class="row">
                    <div style="background: #E5E5E5;" class="col-md d-flex justify-content-between">
                        <label style="font-size: x-large;" for="menu" class="label"><img src="img/arrow-right-circle.svg" alt=""></label>
                        <form class="d-flex my-2 ">
                            <input class="me-2" type="search" placeholder="Search...                   🔍">
                            <img src="img/notif.svg" alt="">
                        </form>
                    </div>