<?php
    if(isset($_GET["us"]) && isset($_GET["pw"])){
        $us = $_GET["us"];
        $pw = $_REQUEST["pw"];

        echo "$us - $pw";
    } else {
        header("location:Demo01.php");
    }
?>