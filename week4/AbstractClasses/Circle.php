<?php
    require "Shape.php";
    // Concrete class
    class Circle extends Shape {
        public $radius;

        public function getArea() {
            return (pi() * $this->radius * $this->radius);
        }
    }
?>