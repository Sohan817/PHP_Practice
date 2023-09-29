<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Objects of Car class
    require_once "Classes/Car.php";
    $car1 = new Car("BMW", 'green');
    echo "<br>";
    echo $car1->getCarInfo();
    echo "<br>";
    $car1->setBrand("Volvo");
    echo $car1->getBrand();
    echo "<br>";
    $car1->setColor("yellow");
    echo $car1->getColor();

    ?>
</body>

</html>