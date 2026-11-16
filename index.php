<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$car = new Car(4, 'blue', 5, 'essence');
try {
    echo $car->start() . '<br>';
} catch(Exception $e) {
    $car->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut.';
}