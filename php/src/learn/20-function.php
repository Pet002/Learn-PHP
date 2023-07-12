<?php
    function helloworld($a, $b = 2) : int {
        echo "helloworld a = $a <br>";
        echo "helloworld b = $b <br>";
        echo " PHP <br>";
        return $a + $b;
    };

    // helloworld(1, 2);
    echo helloworld(1) . "<br>";
?>