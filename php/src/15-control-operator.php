<?php

    $a = 1000;
    $b = 2000;
    
    // NOT
    if ( !($a > $b) ) {
        echo " ! ";
        echo $a . " > " . $b . " = ";
        echo "true" . "<br>";
    }else  echo "false";


    $a = true;
    $b = true;
    $c = false;
    // AND
    if ( $a && $b) {
        echo var_dump($a) . " && " ;
        echo var_dump($b) . " = ";
        echo "true" . "<br>";
    }else  echo "false";

    if ( $a && $c) {
        echo var_dump($a) . " && " ;
        echo var_dump($c) . " = ";
        echo "true" . "<br>";
    }else  echo "false"."<br>";


    // OR

    if ( $a || $c) {
        echo var_dump($a) . " || " ;
        echo var_dump($c) . " = ";
        echo "true" . "<br>";
    }else  echo "false";

// 
    // elseif (condition) {
    //     # code...
    // }
   
?>