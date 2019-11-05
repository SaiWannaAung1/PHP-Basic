<?php
class Friut{
    public $name;
    public $color;
    public $weight;


     function setColor($color): void
    {
        $this->color = $color;
        echo "Color is ".$this->color;
    }


    protected function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    private function setName($name){
        $this->name = $name;
    }


}

$mango = new Friut();
$mango ->setColor("red");
//$mango ->setWeight("300");
//$mango ->setName("Mango");