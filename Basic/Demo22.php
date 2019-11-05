<?php

echo "Plus value is ".plus(2,1)."<br>";
echo "Minus value is ".minus(2,1)."<br>";
echo "Multiply value is ".multiply(2,2)."<br>";
echo "Dev value is ".dev(6,2)."<br>";

function plus($a, $b)
{
$r = $a +$b;
    return $r;
}

function minus($a, $b)
{
$r = $a -$b;
    return $r;
}
function multiply($a, $b)
{
$r = $a* $b;
    return $r;
}
function dev($a, $b)
{
$r = $a /$b;
    return $r;
}
