 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

 <body>
   <?php
    //String operator
    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;
    echo $c;
    echo "<br>";
    //Arithmetic operator
    echo 1 + 2 * 4;
    echo "<br>";
    //Assignment Operator
    $a = 2;
    $a += 4;
    echo $a;
    echo "<br>";
    //comperisn operator
    $c = 2;
    $d = 2;
    $e = 4;
    $f = 5;
    if ($c == $d) {
      echo "This Statemnt is true";
    }
    echo "<br>";
    //Logical Operator
    if ($c == $d && $e < $f || $a <> $c) {
      echo "This Statemnt is true";
    }
    echo "<br>";
    //Increment and decrement operator
    $x = 1;
    echo ++$x;
    echo $x++;
    echo $x;
    ?>
 </body>

 </html>