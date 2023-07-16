<?php
    // Database Connection
    require "../config/loadEnv.php";
    $dsn = "mysql:host=$_ENV[HOST];dbname=$_ENV[DBNAME]";
    // echo $dsn;
    $username="root";
    $password = "MYSQL_ROOT_PASSWORD";

    // เตรียมข้อมูล
    $fnameValue = "jojo";
    $ageValue = 25;
    $departmentValue = "markets";

    try{  
        $obj = new PDO($dsn, $username, $password);
        echo "Successful connection<br>";
        // บันทึกข้อมูล
        $sql = "INSERT INTO employees(fname,age,department) VALUES (:fname,:age,:department);";
        $stmt = $obj -> prepare($sql);
        // bindParam 
        $stmt -> bindParam(":fname", $fnameValue);
        $stmt -> bindParam(":age", $ageValue);
        $stmt -> bindParam(":department", $departmentValue);
        // Execute
        $result = $stmt -> execute();
        echo "Save Successful";        
    }catch(PDOException $e){
        echo $e -> getMessage();
    }

?>