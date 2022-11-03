<?php
    require "Polygon.php";
    // Concrete class
    class Rectangle extends Polygon {
        public $width;
        public $height;

        public function getArea() {
            return ($this->witdh * $this->height);
        }

        public function getNumberOfSides() {
            return (4);
        }
    }
?>