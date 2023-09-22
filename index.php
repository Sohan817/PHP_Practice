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
   <div class="container text-center" style="width: 12rem;">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
       <input type="number" name="num1" class="form-control" placeholder="Enter first Number" required><br><br>
       <select name="operator">
         <option value="addition">+</option>
         <option value="substraction">-</option>
         <option value="multiply">*</option>
         <option value="divition">/</option>
       </select><br><br>
       <input type="number" name="num2" class="form-control" placeholder="Enter second Number" required><br><br>
       <button class="btn btn-primary">Calculate</button>
     </form>
   </div>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //Grab data from inputs
      $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
      $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
      $operator = htmlspecialchars($_POST["operator"]);
      //Error Handlers
      $error = false;
      if (empty($num1) || empty($num1) || empty($operator)) {
        echo "<br>";
        echo "<p class='text-center'>Fill in all fields</p>";
        $error = true;
      }
      if (is_numeric($num1) || is_numeric($num2)) {
        echo "<br>";
        echo "<p class='text-center'>Only write number</p>";
        $error = true;
      }
      //Calculate the number if no errors
      $value = 0;
      switch ($operator) {
        case "addition":
          $value = $num1 + $num2;
          break;
        case "substraction":
          $value = $num1 - $num2;
          break;
        case "multiply":
          $value = $num1 * $num2;
          break;
        case "divition":
          $value = $num1 / $num2;
          break;
        default:
          echo "<p class='text-center'>Something went wrong</p>";
          break;
      }
    }
    echo "<p class='text-center'>Result of " . $operator . " = " . $value . "</p>";
    ?>
 </body>

 </html>