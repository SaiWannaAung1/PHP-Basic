<?php

$student["student"] ="Mg Mg";
$student["engineer"] ="Aung Aung";
$student["doctor"] ="Ma Ma";
$student["manager"] ="Zaw Zaw";
$student["teacher"] ="Kyaw Kyaw";
$student["tutor"] ="Mya Mya";
$student["professor"] ="Hla Hla";
$student["lecture"] ="Maw Maw";
echo "<table border='1'>";

echo "<tr> <th> ID </th>  <th> Name </th> <th> Status </th> </tr>";
$i =1;
foreach ($student as $key => $value)
{
    echo "<tr>";

    echo "<td> ".($i++)."</td>";
    echo "<td>  $value  </td>";
    echo "<td> ".$key."</td>";
    echo "</tr>";
}


echo "</table>";
