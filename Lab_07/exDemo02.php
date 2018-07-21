<?php
    if(isset($_POST["us"]) && isset($_POST["pw"])){
        $us = $_POST["us"];
        $pw = $_REQUEST["pw"];

        echo "$us - $pw";
    } else {
        header("location:Demo01.php");
    }
?>