<!DOCTYPE html>

<html>
    <head>
        <title>PHP</title>
        <style>
            p{
                text-align:center;
            }
        </style>
    </head>

    <body>
        <p>html</p>
    </body>

    <?php
        // แทรกได้หลายค่า โดยใช้ . ต่อ String
        // เร็วกว่า print
        echo "<h2>แสดงผล</h2>";
        // แทรกหลายค่าไม่ได้
        // มีการส่งค่กลับมา
        print ("<h2>tanachod</h2>");
        print ("<h2>tanachod</h2>");
    ?>

    <form action="">
            <label>ชื่อ</label>
            <input type="text" name="" id="" value="<?php echo "เพชร" ?>">
            <label>นามสกุล</label>
            <input type="text" name="" id="" value="<?php echo "เก่ง" ?>">
    </form>
</html>