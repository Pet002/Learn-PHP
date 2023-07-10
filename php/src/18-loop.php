<?php
    // Loop

    // while loop ทำเมื่อเงื่อนไขในวงเล็บ เป็นจริง

    $count = 1;
    $limit = 10;
    
    while ($count < $limit) {
        echo "รอบที่ " . $count . "<br>";
        $count ++;
    }
    echo "end" . "<br>";

    echo "<hr>";

    // for loop ทำเมื่อเงื่อนไขในวงเล็บ เป็นจริง
    for ($i=0; $i < 10; $i++) { 
        echo "รอบที่ $i <br>";
    }

    echo "<hr>";

    // do while ทำก่อน 1 รอบ ค่อยตรวจสอบ
    $a = 1;
    do {
        echo "รอบที่ $a <br>";
        $a ++;
    } while ($a <= 10);
?> 

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ทดสอบ Loop</h1>
    <ul>
        <?php //while ($count < $limit){
        ?>
        <li><?php //echo $count;?></li>
        <?php 
        //$count++;}
        ?>
    </ul>
</body>
</html> -->