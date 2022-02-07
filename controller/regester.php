<?php
    
    // variables
    global $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_mobileErr, $_passwordErr;
    global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr, $mobileEmptyErr, $passwordEmptyErr, $email_verify_err;

     if(isset($_POST['submit'])) {
         $name     = $_POST["name"];
         $email         = $_POST["email"];
         $password      = $_POST["password"];

             // check if email already exist
             $email_check_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
             $rowCount = mysqli_num_rows($email_check_query);

            // Verify if form values are not empty
            if(!empty($name) && !empty($email) && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {

                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    // Query
                    $sql = "INSERT INTO users (name, email, password) VALUES ('{$name}', '{$email}', '{$password_hash}')";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($conn, $sql);
                    echo "
                    <script>
                    window.location.href = 'index.php';
                    </script>";
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($conn));
                    }
            }
        } else {
            if(empty($name)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    First name can not be blank.
                </div>';
            }
            }
            if(empty($email)){
                $emailEmptyErr = '<div class="alert alert-danger">
                    Email can not be blank.
                </div>';
            }
            if(empty($password)){
                $passwordEmptyErr = '<div class="alert alert-danger">
                    Password can not be blank.
                </div>';
            }            
    }
?>