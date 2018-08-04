<?php
    $uid = $_SESSION['uid'];
    $name = $_SESSION['name'];
    echo "<h2>Hello, $name - $uid</h2>";
    $myKey = $_COOKIE["mykey"];
    echo "<div>$myKey</div>";
    
    include("book.php");
    echo $_SESSION['book'];
    $book = unserialize($_SESSION['book']);
    echo "<div>Book info: $book->name - $book->price </div>";
?>
<a href="exLogout.php">Logout</a>