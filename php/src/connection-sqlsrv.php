<?php
    $serverName = "host.docker.internal";
    $userName = 'sa';
    $userPassword = 'Tanachod02';
    $dbName = "FLOW64";
    $connectionInfo = array(
        "Database" => $dbName,
        "UID" => $userName,
        "PWD" => $userPassword
    );
    // echo $serverName;
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    // echo $conn."<br>";

    if( !$conn ){
        echo "fail connection";
        foreach(sqlsrv_errors() as $items){
            foreach($items as $item){
                echo $item . "<br>";
            }
        }
        die(print_r(sqlsrv_errors(), true));
    }else {
        echo "connection succcess";
    }
?>