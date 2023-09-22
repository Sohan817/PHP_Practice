 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 </head>
 <title>Calculator</title>
 </head>

 <body>
   <?php
    $color = array("red", "green", "blue");
    $fruites = ["Apple", "Mango", "Banana"];
    $test = ["Orange", "Cherry"];
    // //Delete an element in array
    // unset($fruites[1]);
    // //remove an element from array 
    // array_splice($fruites, 0, 1);

    // //add an element in array
    // $fruites[] = "Orange";
    array_push($color, "Black");
    print_r($color);
    // echo $fruites[1];
    //Associative array
    $tasks = [
      "laundry" => "Sohan",
      "trash" => "Nadim",
      "cook" => "Suborna",
      "Vacuum" => "Sohag"
    ];
    echo $tasks["laundry"];
    //Assending sort
    sort($tasks);
    print_r($tasks);
    //Array length
    echo count($tasks);
    //replaced and marged array
    array_splice($fruites, 2, 0, $test);
    print_r($fruites);

    //Multidimentional array
    $food = [
      ["Apple", "Cherry", "Banana"],
      "mango",
      "Orange"
    ];
    echo $food[0][1];
    //Associative multidimentional array
    $foods = [
      "fruites" => ["Apple", "Cherry", "Banana"],
      "Vegetable" => ["Cucumber", "Potato"],
      "meat" => ["beef", "chicken"]
    ];
    echo $foods["meat"][1];
    ?>

 </body>

 </html>