<?php
    include_once("Xe.php");

    class XeHoi extends Xe{
        var $tocDo;

        public function __construct(){
            parent::__construct("Xe Hoi");
            $this->tocDo = 200;
        }

        public function In(){
            echo $this->tenXe." - ".$this->tocDo;
        }
    }
?>