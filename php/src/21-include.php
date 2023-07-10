<?php
    include '21-menus.php'; // หาไม่เจอยังรันได้อยู้
    require '21-menu.php'; // หาไม่เจอ ไม่ทำแล้ว
    
    echo "Helloworld";
    require '21-footer.php';

    echo $name . "<br>";
    ShowData();
?>