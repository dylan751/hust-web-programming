<?php
    include "Shape.php";
    // Abstract child class
    abstract class Polygon extends Shape {
        abstract function getNumberOfSides();
    }
?>