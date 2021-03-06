<?php
include 'controller/login.php';
if(isset($_SESSION['login'])){
    header("Location: dashboard.php");
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign-in.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SIGN-IN</title>
</head>
<body>

    <div style="max-width: 400px; min-width: 300px;" class="container bg-white shadow-lg">
        <h1 class="titre m-5"><span class="text-info p-2">|</span>E-classe</h1>
        <h2 class="text-center mt-5">Sign In</h2>
        <p class="text-center mb-5">Enter your credentials to access your account</p>
    <form action="" method="post">
        <div class="mb-3">
        <?php echo $accountNotExistErr;?>
        <?php echo $emailPwdErr;?>
        <?php echo $email_empty_err;?>
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control opacity-50" placeholder="Enter your email">
        </div>
        <div class="mb-5">
        <?php echo $pass_empty_err;?>
        <label>Password</label>
        <input type="password" name="password" class="form-control opacity-50" placeholder="Enter your password">
        </div>
        <div class="d-grid">
        <button id="btnadd" type="submit" name="submit" class="btn btn-primary">SIGN IN</button>
        </div>
      
    </form>
        <div class="d-grid">
            <br>
        <h3> Creat Account :</h3>
        <a class="btn btn-secondary" href="sign-up.php" role="button">SIGN-UP</a>
        </div>
        <div class="mt-4 text-center">
        <p>Forgot your password?<a href="#"> Reset Password</a></p>
        </div>
    </div>

    <?php
    include 'assets/js.php';
    ?>