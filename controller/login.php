<?php
    // Database connection
    include('config/db.php');
    // to send user to the dashboard page if he is logged in already
    if(isset($_SESSION['login'])){
        header("Location: dashboard.php");
    };
                
    global $wrongPwdErr, $accountNotExistErr, $email_empty_err, $pass_empty_err, $emailPwdErr;

    if(isset($_POST['submit'])) {
        $email_signin        = $_POST['email'];
        $password_signin     = $_POST['password'];

        // Query if email exists in db
        $sql = "SELECT * From users WHERE email = '{$email_signin}' ";
        $query = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . mysqli_error($conn));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            // Check if email exist
            if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        User account does not exist.
                    </div>';
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];
                }

                // Verify password
                $password = password_verify($password_signin, $password);

                    if($email_signin == $email && $password_signin == $password) {
                       header("Location: ./dashboard.php");
                       
                       $_SESSION['id'] = $id;
                       $_SESSION['name'] = $name;
                       $_SESSION['email'] = $email;
                       $_SESSION['login'] = true;
                       $_SESSION['timestamp'] = time();

                    } else {
                        $emailPwdErr = '<div class="alert alert-danger">
                                Either email or password is incorrect.
                            </div>';
                    }
                

            }

        } else {
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email not provided.
                    </div>";
            }
            
            if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Password not provided.
                        </div>";
            }            
        }

    }

?>