<?php
    // Database Connection
    require "../config/loadEnv.php";
    $dsn = "mysql:host=$_ENV[HOST];dbname=$_ENV[DBNAME]";
    // echo $dsn;
    $username="root";
    $password = "MYSQL_ROOT_PASSWORD";

    // เตรียมข้อมูล
    $fnameValue = "jo";
    $ageValue = 25;
    $departmentValue = "Financial";

    try{  
        $obj = new PDO($dsn, $username, $password);
        echo "Successful connection<br>";
        // บันทึกข้อมูล
        $sql = "INSERT INTO employees(fname,age,department) VALUES (?,?,?);";
        $stmt = $obj -> prepare($sql);
        // bindParam 
        // ถ้าเป็นลำดับ ให้เริ่มจาก 1 เสมอ
        $stmt -> bindParam(1, $fnameValue, PDO::PARAM_STR);
        $stmt -> bindParam(2, $ageValue, PDO::PARAM_INT);
        $stmt -> bindParam(3, $departmentValue, PDO::PARAM_STR);
        // Execute
        $result = $stmt -> execute();
        echo "Save Successful";
    }catch(PDOException $e){
        echo $e -> getMessage();
    }

?>