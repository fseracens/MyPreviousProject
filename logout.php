<?php
    session_start();
    session_unset();
    session_destroy();
    header('location:index.php');//If user log out from the webpage
?>