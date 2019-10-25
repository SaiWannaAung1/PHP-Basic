<?php
$student[0] ="Mg Mg";
$student[1] ="Aung Aung";
$student[2] ="Ma Ma";
$student[3] ="Zaw Zaw";
$student[4] ="Kyaw Kyaw";
$student[5] ="Mya Mya";
$student[6] ="Hla Hla";
$student[7] ="Maw Maw";
echo "<table border='1'>";

echo "<tr> <th> ID </th>  <th> Name </th> </tr>";

for ($i=0;$i<8;$i++)
{
    echo "<tr>";
    echo "<td> ".($i+1)."</td>";
    echo "<td>  $student[$i]  </td>";
    echo "</tr>";
}


echo "</table>";


?>