<?php

declare(strict_types=1);
function sayHello(string $name)
{
  return "Hello " . $name . "!";
}
$test = sayHello("Sohan");
echo $test;

echo "<br>";

function addition(int $num1, int $num2)
{
  $result = $num1 + $num2;
  return $result;
}
echo addition(2, 6);
