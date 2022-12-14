<?php
    session_start();
    unset($_SESSION['usernameSession']);
    unset($_SESSION['passwordSession']);
    session_destroy();
    header("Location: index.php");
?>