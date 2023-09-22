 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

 <body>
   <?php
    //If else statement
    $a = 1;
    $b = 2;
    $bool = true;

    if ($a < $b && !$bool) {
      echo "First statement is true";
    } else if ($a < $b && $bool) {
      echo "Second statement is true";
    } else {
      echo "Third statement is true";
    }
    echo "<br>";
    //Switch 
    switch ($a) {
      case 1:
        echo "First statement is true";
        break;
      case 2:
        echo "Second statement is true";
        break;
      default:
        echo "Third statement is true";
    }
    echo "<br>";
    //Match statement
    $result = match ($a) {
      1, 3, 5 => "Var a is one",
      2 => "Var a is two",
      default => "None were to return"
    };
    echo $result
    ?>
 </body>

 </html>