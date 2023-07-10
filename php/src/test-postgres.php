<?php
$host = 'host.docker.internal'; // Change this to your PostgreSQL server hostname or IP address
$dbname = 'PGTEST'; // Change this to your database name
$user = 'postgres'; // Change this to your database username
$password = 'Tanachod02'; // Change this to your database password

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the PostgreSQL database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>