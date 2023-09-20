<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  //Variable and naming convention
  $_name = "Sohan";
  echo $_name;
  ?>
  <!-- Data Type -->
  <?php
  $string = "Sohan";
  $int = 10;
  $float = 20.45;
  $bool = true;
  echo $float;
  //Array Type
  $names = array("Sohan","Nadim","Suborna");
  $number = [1,2,4,6,7];
  print_r($number[0]);
  print_r($names);

  //object 
  //$object = new Car();

  //Embedding HTML and php
  $name = "Shohan Hossain";
  $test = $name;
  ?>
  <p>Hi my name is <?php echo $name?>. I am learning php</p>
</body>
</html>