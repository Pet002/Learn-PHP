<?php
    // IF
    $balance = 2000;
    $transfer = 2001;

    
    echo "ยอดคงเหลือ = " . $balance . "<br>";
    if($balance >= $transfer){
        echo "สามารถกดเงินได้"."<br>";
        $balance -= $transfer;
        echo "ยอดคงเหลือ = " . $balance . "<br>";
    }else echo "ไม่สามารถกดเงินได้" . "<br>";
    echo "คือบัตรกดเงิน";
    
?>