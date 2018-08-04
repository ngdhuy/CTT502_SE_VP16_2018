<?php
    session_start();
    session_destroy();
    setcookie("mykey",'', time() - 3600);
    header("location:index.php");
?>