<?php
    $fruits = ["Apple", "Lemon", "mango", "Tometo"];

    print_r($fruits);
    // array_push
    array_push($fruits, "Red");
    print_r($fruits);
    echo "<br>";
    
    // array_pop
    array_pop($fruits);
    echo "<br>";
    print_r($fruits);

    // array_unshift
    array_unshift($fruits, "ddd");
    echo "<br>";
    print_r($fruits);

    // array_unshift
    array_shift($fruits);
    echo "<br>";
    print_r($fruits);
    echo "<hr>";


    // array_slice
    // print_r($fruits);
    array_splice($fruits, 2, 3);
    print_r($fruits);
    echo "<br>";

    $arr = array_slice($fruits, 0, 2);
    print_r($arr);
    echo "<br>";



?>