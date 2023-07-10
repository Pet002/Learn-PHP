<?php
    // count นับจำนวนสมาชิกใน Array

    $fruit = [10, 20, 30, 40, 50];

    echo "count = ";
    echo count($fruit) . "<br>";

    for ($i=0; $i < count($fruit); $i++) { 
        echo $fruit[$i] . "<br>";
    }

    // array_count_values นับความถี่ของข้อมูลใน Array ที่ซ้ำกัน

    
    $data = [1,1,1,3,2,5,1,1,2,2,4,9,8];

    print_r(array_count_values($data));
    echo "<br>";
    list($a, $b) = $data;

    echo $a . " " . $b;
    echo "<br>";

    $rooms = array("A01" => "A", "A02" => "B", "A03" => "C");
    foreach($rooms as $item){
        echo $item. "<br>";
    }
    
    foreach($rooms as $key=>$item){
        echo $key . "คือ" . $item. "<br>";
    }

    echo "<br>";
    

    

    // each function is DEPRECATED 
    // while ($item=each($rooms)){
    //     echo $item["key"] . "=>" . $item["value"]. "<br>";
    // }
    echo "end <br>";


?>