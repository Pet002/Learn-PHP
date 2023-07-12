<?php
    // array_key_exists
    $country = ["TH" => "ไทย" ,"EN" => "อังกฤษ", "CH" => "จีน"];
    
    if(array_key_exists("TH", $country)){
        print("Found TH");
    }else{
        print("not found");
    }
    echo "<br>";

    if(in_array("ไทย",$country)){
        print("Found TH");
    }else{
        print("not found");
    }

    echo"<hr>";


    echo "<h1>Merge</h1>";

    $arr1 = ["product" => "Table", "color" => "orange", 50, "price" => 100];
    $arr2 = ["dis" => 100, "delevery"=> 300, "price" => 2000];
    $result = array_merge($arr1, $arr2);
    print_r($result);
    echo "<br>";

    $result = array_merge_recursive($arr1, $arr2);
    print_r($result);
    echo "<br>";

    $a1 = ["A", "B", "C", "D"];
    $a2 = ["1", "2", "3", "4"];

    $result = array_combine($a1, $a2);
    print_r($result);
    echo "<br>";


?>