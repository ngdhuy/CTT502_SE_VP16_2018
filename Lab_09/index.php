<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        span{
            display: inline-block;
            width: 60px;
        }
    </style>
</head>
<body>
    <h1>Hello world</h1>
    <?php 
        if(isset($_SESSION["uid"]) == false){
            include("mLogin.php");
        } else {
            include("mAccount.php");
        }
    ?>
</body>
</html>