<?php
    // Single array || aray function

    $number = [1,2,3,4,5,6,7,8,9,10];
    echo $number[3] . "<br>";
    echo "<hr>";

    $number = array(10,20,30);
    echo $number[2]."<br>";
    print_r( $number );
    echo "<br>";

    $number = range(1, 20, 2);
    $number[0] = 100;
    print_r( $number );
    echo "<br>";

    
    $number = range("A", "Z", 3);
    $number[0] = "Z";

    print_r( $number );
    echo "<hr>";


    // peer array | array function (Hash Maps)

    $room = ["A01" => "A", "A02" => "B", "A03" => "C"];
    print_r( $number );


    $room = array("A01" => "A", "A02" => "B", "A03" => "C");
    echo $room['A01'] . "<br>";
    print_r($room);


?>