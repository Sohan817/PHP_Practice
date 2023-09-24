<?php
//for loop
for ($i = 0; $i < 10; $i++) {
  echo "This is for loop " . $i . "<br>";
}

//while lopp
$test = 5;
while ($test < 10) {
  echo "This is while loop " . $test . "<br>";
  $test++;
}
//do while loop
$test = 10;
do {
  echo "This is do while loop " . $test . "<br>";
  $test++;
} while ($test < 10);

//foreach loop 
$fruites1 = ["Apple", "Mango", "Banana"];
foreach ($fruites1 as $fruite) {
  echo "This is a " . $fruite . "<br>";
}

//foreach loop with asssociative array
$fruites2 = ["Apple" => "Red", "Mango" => "Green", "Banana" => "Yellow"];
foreach ($fruites2 as $fruite => $color) {
  echo "This is a " . $fruite . ",Whose color is " . $color . "<br>";
}
