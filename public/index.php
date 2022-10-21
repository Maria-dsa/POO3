<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOBASICS2 : Bicycles and cars and trucks</title>
</head>

<body>

    <?php

    require '../src/Vehicle.php';
    require '../src/Bicycle.php';
    require '../src/Car.php';
    require '../src/road/HighWay.php';
    require '../src/road/MotorWay.php';
    require '../src/road/PedestrianWay.php';
    require '../src/road/ResidentialWay.php';
    require '../src/Bike.php';
    require '../src/Skateboard.php';
    ?>

    <h1> MOTORWAYS</h1>
    <?php
    $autoroute = new MotorWay();
    $velopeugeot = new Bike('red', 1, 'velopeugeot');
    $skate = new Skateboard('blue', 1, 'skate');
    $mini = new Car('black', 4, 'fuel', 'mini');

    $autoroute->addVehicle($velopeugeot);
    $autoroute->addVehicle($skate);
    $autoroute->addVehicle($mini);

    var_dump($autoroute->getCurrentVehicule());
    ?>

    <h1> RESIDENTIAL WAY</h1>
    <?php
    $rue = new ResidentialWay();

    $rue->addVehicle($velopeugeot);
    $rue->addVehicle($skate);
    $rue->addVehicle($mini);

    var_dump($rue->getCurrentVehicule());
    ?>

    <h1> PEDESTRIAN WAY</h1>
    <?php
    $chemin = new PedestrianWay();
    $chemin->addVehicle($velopeugeot);
    $chemin->addVehicle($skate);
    $chemin->addVehicle($mini);
    var_dump($chemin->getCurrentVehicule());
    ?>


</body>

</html>