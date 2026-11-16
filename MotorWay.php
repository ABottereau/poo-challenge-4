<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(4);
        parent::setMaxSpeed(130);
    }

    public function addVehicle(Vehicle $vehicle): void 
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}