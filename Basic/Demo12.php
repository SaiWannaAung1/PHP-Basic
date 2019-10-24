<?php
$address['name'] = "Robin";
$address['occupation'] = "GM";
$address['age'] = "20";
echo $address['name']." and ".$address['occupation']." and ".$address['occupation'];

$address = array("name"=>"Robin","occupation" => "GM", "age" => "20");

foreach ($address as $key => $value)
{
    echo "<h1>".$value."</h1>";
}