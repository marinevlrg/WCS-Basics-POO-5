<?php
// index.php

require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';
require_once 'vehicle.php';
require_once 'highway.php';
require_once 'motorway.php';
require_once 'pedestrianWay.php';
require_once 'residentialWay.php';
require_once 'skateboard.php';
require_once 'interfaces.php';

/* //Bicycle
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

//CAR
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

//Truck
$truck = new Truck('black', 6, 'fuel', 110);
$truck->setCurrentSpeed(80);
$truck->setCargo(50);
$truck->setNbWheels(8);
var_dump($truck);
echo $truck->forward();
echo $truck->isFull(); */

///======TEST POO4======///

$bolide = new Car('blue', 2, 'fuel');

echo 'Test capture erreur sans le frein à main et sans capture d\'erreur :';
var_dump($bolide);
echo $bolide->start();

echo 'Test capture erreur avec le frein à main :';
$bolide->setHasParkBrake(true);
var_dump($bolide);
try {
    echo $bolide->start() . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception received  : ' . $e->getMessage() . PHP_EOL;
    $bolide->setHasParkBrake(false);
    var_dump($bolide);
} finally {
    echo "Ma voiture roule comme un donut !" . PHP_EOL;
}



