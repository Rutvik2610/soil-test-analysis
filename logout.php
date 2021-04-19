<?php
    session_start();
    session_destroy();
    header("Location: http://localhost/soil-test-analysis/login.php");
?>