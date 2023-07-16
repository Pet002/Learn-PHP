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
        $sql = "SELECT * FROM employees;";
        $result = $obj -> query($sql);
        $arr = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $key) {
            echo $key["id"] . "<br>";
            echo $key["fname"]. "<br>";
            echo $key["department"]. "<br>";
            echo "<hr>";
        }
    }catch(PDOException $e){
        echo $e -> getMessage();
    }

?>