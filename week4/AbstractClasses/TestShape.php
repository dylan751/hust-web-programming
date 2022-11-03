<?php
    $myCollection = array();

    // Make a rectangle
    $r = new Rectangle;
    $r->width = 5;
    $r->height = 7;
    $myCollection[] = $r;
    unset($r);

    // Make a triangle
    $t = new Triangle;
    $t->base = 4;
    $t->height = 5;
    $myCollection[] = $t;
    unset($t);

    // Make a circle
    $c = new Circle;
    $c->radius = 3;
    $myCollection[] = $c;
    unset($c);

    // Make a color
    $c = new Color;
    $c->name = "blue";
    $myCollection[] = $c;
    unset($c);

    foreach($myCollection as $s) {
        if ($s instanceof Shape) {
            print("Area: " . $s->getArea() . "<br>\n");
        }

        if ($s instanceof Polygon) {
            print("Sides: " . $s->getNumberOfSides() . "<br>\n");
        }

        if ($s instanceof Color) {
            print("Color: $s->name<br>\n");
        }

        print("<br>\n");
    }
?>