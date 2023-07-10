<?php
$serverName = "host.docker.internal";
$database = 'FLOW64';
$username = 'sa';
$password = 'Tanachod02';
try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perform SQL operations
    echo "Connected to the PostgreSQL database successfully!";
    $conn = null;
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>