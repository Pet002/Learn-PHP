<?php
    $products = array(
        array("keyboard",900),
        array("Mouse",500),
        array("Table",11900),
    );
    
    print($products[0][1]);
    echo "<br>";

    for ($i=0; $i < count($products); $i++) { 
        echo "<hr>";
        for ($j=0; $j < count($products[$i]); $j++) { 
            echo $products[$i][$j]."<br>";
        }
    }

    echo "<hr>";
    echo "<hr>";


    foreach($products as $product){
        echo "<hr>";

        foreach($product as $item){
            echo $item. "<br>";
        }
    }

?>