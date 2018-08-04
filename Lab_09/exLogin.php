<?php
    session_start();
    include("book.php");

    if(isset($_POST['us'])){
        $us = $_POST['us'];
        $pw = $_POST['pw'];

        echo "$us - $pw";

        if($us === 'admin' && $pw === 'admin')
        {
            $_SESSION['uid'] = 123;
            $_SESSION['name'] = "Mr Buoi";

            $book = new Book();
            $_SESSION['book'] = serialize($book);

            setcookie('mykey', 123, time() + 10);
        }
    }
    header('location:index.php');
?>