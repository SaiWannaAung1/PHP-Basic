<?php
$state["Kachin"] ="MyitKyiNa";
$state["Kayah"] ="Loikaw";
$state["Kayin"] ="Hpa-An";
$state["Chin"] ="Har-Kar";
$state["Mon"] ="Mawlamyaing";
$state["Rakhine"] ="Sitt-Twe";
$state["Shan"] ="TaungGyi";

$divison["Mandalay"] ="mandalay";
$divison["Yangon"] ="yangon";
$divison["Sagaing"] ="Sagaing";
$divison["Magway"] ="magway";
$divison["Bago"] ="bago";
$divison["Tanintharyi"] ="Dawei";
$mm = array_merge($state,$divison);
echo "<table border='1'>";

echo "<tr> <th> ID </th>  <th> State </th><th> City </th> </tr>";
$i =1;
foreach ($state as $key => $value)
{
    echo "<tr>";

    echo "<td> ".($i++)."</td>";
    echo "<td> ".$key."</td>";
    echo "<td>  $value  </td>";

    echo "</tr>";
}


echo "</table>";
echo "<br>";
echo "<table border='1'>";

echo "<tr> <th> ID </th>  <th> Division </th><th> City </th> </tr>";
$i = 1;
foreach ($divison as $key => $value)
{
    echo "<tr>";

    echo "<td> ".($i++)."</td>";
    echo "<td> ".$key."</td>";
    echo "<td>  $value  </td>";

    echo "</tr>";
}


echo "</table>";

echo "<br>";
echo "<table border='1'>";

echo "<tr> <th> ID </th>  <th> State/Division </th> <th> City </th> </tr>";
$i =1;
foreach ($mm as $key => $value)
{
    echo "<tr>";

    echo "<td> ".($i++)."</td>";
    echo "<td> ".$key."</td>";
    echo "<td>  $value  </td>";

    echo "</tr>";
}


echo "</table>";


