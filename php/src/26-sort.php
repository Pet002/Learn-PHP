<?php
    $number = [1,8,5,17,5,33,64,92,9,2,9,415,1];
    sort($number);
    print_r($number);
    echo "<br>";
    rsort($number);
    print_r($number);
    echo "<br>";

    $city = ["ก","ข","ค", "ง"];
    sort($city);
    print_r($city);
    echo "<br>";
    rsort($city);
    print_r($city);
    echo "<hr>";


    // Associate array
    $arr = ["A" => 20, "B" => 15, "C" => 30, "D" => 25];
    $country = ["TH" => "ไทย" ,"EN" => "อังกฤษ", "CH" => "จีน"];

    // ตามค่า
    asort($arr);
    print_r($arr);
    echo "<br>";

    arsort($arr);
    print_r($arr);
    echo "<br>";

    // ตาม keys
    ksort($country);
    print_r($country);
    echo "<br>";

    krsort($country);
    print_r($country);
    echo "<br>";

?>