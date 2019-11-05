<?php
echo fix_name("Mg Mg","Kyaw Kyaw","Zaw Zaw");

function fix_name($n1 , $n2 , $n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return $n1."<br>".$n2."<br>".$n3;
}
