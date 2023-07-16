<?php
    // Database Connection
    require "../config/loadEnv.php";
    $dsn = "mysql:host=$_ENV[HOST];dbname=$_ENV[DBNAME]";
    // echo $dsn;
    $username="root";
    $password = "MYSQL_ROOT_PASSWORD";

    // Data Prepareation
    $id = 2;
    
    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "DELETE FROM employees WHERE id = ?;";
        $stmt = $obj -> prepare($sql);
        $stmt -> bindParam(1, $id, PDO::PARAM_INT);

        $result = $stmt-> execute();
        echo $result;

    }catch(PDOException $e){
        echo $e -> getMessage();
    }

?>