<?php
session_start();
    if (isset($_SESSION['logged_in'])) {
        echo "Hello admin";
    } else  header("Location: admin-logging.php");
?>