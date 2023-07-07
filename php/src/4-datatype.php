<?php
$price = 50; //int
$score = 90.58; //double
$name = "Tanachod"; // string

$isvalid = true; //boolen

// $isvalid = false;

// $price = $score + 100;

echo $name . "<br>" . $isvalid . "<br>";

echo $price . "<br>";
echo $score . "<br>";

// gettype
echo "<hr>";

echo gettype($price) . "<br>";
echo gettype($isvalid) . "<br>";
echo gettype($score) . "<br>";
echo gettype($name) . "<br>";

// settype
echo "<br>";
settype($score, "string");
echo gettype($score) . "<br>";




