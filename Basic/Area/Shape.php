<?php
 abstract class Shapes
{
     public abstract function area();

}

class Rectangle extends Shapes
{

public function __construct($width,$height)
{
    $this->width = $width;
    $this->height = $height;
}

    public function area()
    {
        return $this->width * $this->height;
    }


}


class Circle extends Shapes
{
    private $radius;
    private $pi = 3.14;
    public function __construct($radius)
    {
        $this->radius = $radius;

    }

    public function area()
    {
        return $this->pi*pow($this->radius,2);

    }

}

class Square extends Shapes
{

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function area()
    {
        return $this->a * $this->a;
    }

}

$cirlce = new Circle(2);
echo "Area of cicle is ".$cirlce->area()."<br>";

$rectangle= new Rectangle(2,3);
echo "Area of rectangle is ".$rectangle->area()."<br>";

$square= new Square(2);
echo "Area of rectangle is ".$square->area();

