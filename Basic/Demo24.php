<?php
class Fruit  {
    public $name;
    public $color;
    function __construct($name,$color)
{
    $this->name = $name;
    $this->color = $color;


}

    function __destruct()
    {
        echo "Fruit is ".$this->name."<br>";
        echo "Color is ".$this->color;
    }


}
$apple = new Fruit("Apple","red");