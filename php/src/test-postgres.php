<!DOCTYPE html>

<html>

<body>

<?php

echo "My first PHP script!";

pg_connect("host=localhost dbname=edb user=enterprisedb password=postgres");

pg_query("create table testing(id integer)");

echo " script! Executed";

?>

</body>

</html>