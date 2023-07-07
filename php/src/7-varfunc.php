<?php

$total1 = null; //ยังกำหนดได้ว่าเป็นอะไรก็ได้ แต่อันอื่นถือว่าบังคับ Datatype แล้ว
$total2 = "";
$total3 = 0;
$total4 = "Tanachod Sakthamjaroen";

echo "ตัวแปร total1 = ".$total1."<br>";
echo "ตัวแปร total2 = ".$total2."<br>";
echo "ตัวแปร total3 = ".$total3."<br>";
echo "ตัวแปร total4 = ".$total4."<br>";


echo "<br>";

// isset ใช้ในการตรวจสอบว่าตัวแปรนี้มีการกำหนดค่าหรือไม่ (คือมีการกำหนดค่า โดยไม่ใช่ NULL ("" ก็นับว่ามีการกำหนดค่า))
// ex มีการส่งค่ามายัง Form หรือไม่
echo "ตัวแปร total1 = ".isset($total1)."<br>";
echo "ตัวแปร total2 = ".isset($total2)."<br>";
echo "ตัวแปร total3 = ".isset($total3)."<br>";
echo "ตัวแปร total4 = ".isset($total4)."<br>";


// unset ใช้ในการ Clear memory หรือ Clear ตัวแปร *ลบตัวแปรออกจากระบบเลย*
// 
// unset($total4);
// 
echo "ตัวแปร total4 = ".$total4."<br>";



echo "<br>";

// empty เช็คว่าตัวแปรเป็นค่าว่างหรือเป็นเลข 0 หรือไม่ (null, "", และ 0)
echo "ตัวแปร total1 = ".empty($total1)."<br>";
echo "ตัวแปร total2 = ".empty($total2)."<br>";
echo "ตัวแปร total3 = ".empty($total3)."<br>";
echo "ตัวแปร total4 = ".empty($total4)."<br>";


echo "<br>";

// is_null ตรวจสอบว่าตัวแปรเป็นว่างไหม

echo "ตัวแปร total1 = ".is_null($total1)."<br>";
echo "ตัวแปร total2 = ".is_null($total2)."<br>";
echo "ตัวแปร total3 = ".is_null($total3)."<br>";
echo "ตัวแปร total4 = ".is_null($total4)."<br>";

// print_r() แสดงค่าแบบตัวแปร Array (ข้าม)


echo "<br>";

// var_dump() แสดงรายละเอียดของตัวแปร

echo var_dump($total1)."<br>";
echo var_dump($total2)."<br>";
echo var_dump($total3)."<br>";
echo var_dump($total4)."<br>";


?>