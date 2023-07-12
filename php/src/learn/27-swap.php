<?php
$arr = ["A" => 20, "B" => 15, "C" => 30, "D" => 25];
$country = ["TH" => "ไทย" ,"EN" => "อังกฤษ", "CH" => "จีน"];

print_r($country);
echo "<br>";
shuffle($country);
print_r($country);

echo "<br>";

asort($arr);
$arrs = array_reverse($arr);
print_r($arrs);
echo "<br>";

$country = ["TH" => "ไทย" ,"EN" => "อังกฤษ", "CH" => "จีน"];
$arr = [1,1,1,1,6,7,2,4,2,3,4,5,5,6,7,8,9];
$keys = array_keys($country);
print_r($keys);
echo "<br>";

$values = array_values($arr);
print_r($values);
echo "<br>";

$filp_result = array_flip($country);
print_r($filp_result);
echo "<br>";


$uni_res = array_unique($arr);
print_r($uni_res);
echo "<br>";


?>