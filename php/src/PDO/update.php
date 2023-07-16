<?php
    // Database Connection
    require "../config/loadEnv.php";
    $dsn = "mysql:host=$_ENV[HOST];dbname=$_ENV[DBNAME]";
    // echo $dsn;
    $username="root";
    $password = "MYSQL_ROOT_PASSWORD";

    // Data Prepareation
    $fnameEdit = 'tttt';
    $ageEdit = 50;
    $departmentEdit = 'it support';
    $id = 1;
    
    try{
        $obj = new PDO($dsn, $username, $password);
        $sql = "UPDATE employees SET fname=?, age=?, department=? WHERE id=?;";
        $stmt = $obj -> prepare($sql);
        $stmt -> bindParam(1, $fnameEdit, PDO::PARAM_STR);
        $stmt -> bindParam(2, $ageEdit);
        $stmt -> bindParam(3, $departmentEdit);
        $stmt -> bindParam(4, $id);
        $result = $stmt-> execute();
        echo $result. 'Update successful';

    }catch(PDOException $e){
        echo $e -> getMessage();
    }
?>