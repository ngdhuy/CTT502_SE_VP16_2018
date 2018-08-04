<?php
    include('book.php');
    function getData(){
        $arrBook = [];
        $arrBook[] = new Book();

        $book = new Book();
        $book->setData("iOS development", "2000$");
        $arrBook[] = $book;

        return $arrBook;
    }

    var_dump(json_encode(getData()));
?>