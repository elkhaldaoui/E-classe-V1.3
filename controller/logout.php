<?php
if (time() - $_SESSION['timestamp'] >  3600 * 24 ) {
    // after time log out
    session_start();
    session_destroy();
    header("Location: ./index.php");
}
else{
    // refrech reset
    $_SESSION['timestamp'] = time();
} 
