<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(1);
        parent::setMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehicle): void 
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}