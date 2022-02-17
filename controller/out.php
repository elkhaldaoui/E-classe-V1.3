<?php
    // after time log out
    session_start();
    session_destroy();
    header("Location: ./../index.php");