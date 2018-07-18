<?php
    include_once("Xe.php");

    class XeDap extends Xe{
        var $choNgoi;

        public function __construct(){
            parent::__construct("Xe dap");
            $this->choNgoi = 2;
        }

        public function In(){
            echo $this->tenXe." - ".$this->choNgoi;
        }
    }
?>