<?php

// type-casting
// เป็นการแปลงชนิดข้อมูลแบบ ภาคบังคับโดยใช้ชนิดข้อมูล

$price = 100.99;

$dlivery = 50.92;

$total = $price + $dlivery;

echo $total."<br>";
echo gettype($total)."<br>";


// type casting

$total = (integer)$total;
echo gettype($total)."<br>";
echo $total."<br>";

$total = (string)$total;
echo gettype($total)."<br>";
echo $total."<br>";



echo "<hr>";
$sum = "400.89";
echo gettype($sum)."<br>";
$sum = (double)$sum;
echo gettype($sum)."<br>";
echo $sum."<br>";

