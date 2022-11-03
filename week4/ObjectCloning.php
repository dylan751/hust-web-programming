<!-- 5.4 -->
<!-- Create a function: `clone()`: To clone an Object -->

<?php
class ObjectTracker
{
    private static $nextSerial = 0;
    private $id, $name;

    function __construct($name)
    {
        $this->name = $name;
        $this->id = ++self::$nextSerial;
    }

    function __clone()
    {
        $this->name = "Clone of $this->name";
        $this->id = ++self::$nextSerial;
    }

    function getId()
    {
        return ($this->id);
    }

    function getName()
    {
        return ($this->name);
    }

    function setName($name)
    {
        $this->name = $name;
    }
}

$ot = new ObjectTracker("Zuong's Object");
$ot2 = clone $ot;
$ot2->setName("Another Object");

// 1. Zuong's Object
print($ot->getId() . " " . $ot->getName() . "<br>\n");

// 2. Clone of Zuong's Object
print($ot2->getId() . " " . $ot2->getName() . "<br>\n");
?>