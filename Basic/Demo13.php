<?php
$a3 = array("red"=>array("code"=>"#FF0000"),"green");
$a4 = array("blue"=>array("code"=>"#FF0000"),"yellow");
echo "<pre>";
$result = array_merge_recursive($a3, $a4);
print_r($result);
echo "</pre>";
echo "<br>";

$al = array("red","green");
$a2 = array("blue","yellow");
echo "<pre>";
print_r(array_merge($al,$a2));
echo "</pre>";
echo "<br>";
$al = array("a"=>"red","b"=>"green");
$a2 = array("c"=>"blue","d"=>"yellow");
echo "<pre>";
print_r(array_merge($al,$a2));
echo "</pre>";
echo "<br>";
$a = array(3=>"red",4=>"green");
echo "<pre>";
print_r(array_merge($a));
echo "</pre>";

?>