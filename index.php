<?php
$string = "Hello World!";

//String length
echo strlen($string);
echo "<br>";

//string position
echo strpos($string, "Wo");
echo "<br>";

//Replace string
echo str_replace("World", "Sohan", $string);
echo "<br>";

//lowercase
echo strtolower($string);
echo "<br>";


//uppercase
echo strtoupper($string);
echo "<br>";

//substring
echo substr($string, 2, 5);
echo "<br>";

//Explode string to array
print_r(explode(" ", $string));
echo "<br>";

//Math function 
$num = -5.5;
echo abs($num);
echo "<br>";
echo round($num);
echo "<br>";
echo pow(2, 3);
echo "<br>";
echo sqrt(3);
echo "<br>";
echo rand(1, 100);
echo "<br>";
//Array function 
$arr = ["Apple", "Mango", "Banana"];
$arr1 = ["orange", "Cherry"];
echo count($arr);
echo "<br>";
print_r(is_array($arr));
echo "<br>";
array_push($arr, "Orange");
print_r($arr);
echo "<br>";
array_pop($arr);
print_r($arr);
echo "<br>";
print_r(array_merge($arr, $arr1));
echo "<br>";
print_r(array_reverse($arr));
echo "<br>";
array_splice($arr, 2, 0, $arr1);
print_r($arr);
echo "<br>";
//date and time
echo date("Y-m-d H:i:s");
echo "<br>";
$times = "2023-09-23 12:00:00";
echo strtotime($times);
