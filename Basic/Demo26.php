<?php
class Fruit26{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;

    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}";
}

}
class Strawberry extends Fruit26{
    public function message()
    {
        echo "I am fruit";
    }
}
