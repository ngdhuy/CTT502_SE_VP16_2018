<?php
    abstract class Xe{
        var $tenXe;

        public function __construct($tenXe){
            $this->tenXe = $tenXe;
        }

        abstract public function In();     
    }
?>