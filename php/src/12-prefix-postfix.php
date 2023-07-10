<?php 
    $a = 5;
    $b = 10;

    // เพิ่มค่า Prefix
    echo "ค่าเริ่มต้น = ".$a."<br>";
    echo "เพิ่มค่าให้ a (prefix) = ".(++$a)."<br>";

    echo "<hr>";
    // เพิ่มค่า Postfix
    echo "ค่าเริ่มต้น = ".$a."<br>";
    echo "เพิ่มค่าให้ a (postfix) = ".($a++)."<br>";
    echo "ค่าหลังใช้งาน = ".$a."<br>";
    
    echo "<hr>";

    // ลดค่า Prefix
    echo "ค่าเริ่มต้น = ".$b."<br>";
    echo "ลดค่าให้ a (prefix) = ".(--$b)."<br>";

    echo "<hr>";
    // ลดค่า Postfix
    echo "ค่าเริ่มต้น = ".$b."<br>";
    echo "ลดค่าให้ a (postfix) = ".($b--)."<br>";
    echo "ค่าหลังใช้งาน = ".$b."<br>";
    
    // // Prefix เพิ่มค่าก่อน ค่อยใช้
    // $a = 1;
    // ++$a;
    // echo $a."<br>";
    // // Postfix ใช้ก่อน ค่อยเพิ่ม
    // $a = 1;
    // $a++;
    // echo $a."<br>";
?>