<?php
    class Book{
        var $name;
        var $price;

        public function __construct(){
            $this->name = 'Startup of Tesla!';
            $this->price = '1000$';
        }

        public function setData($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
    }
?>