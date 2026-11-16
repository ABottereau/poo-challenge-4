<?php

abstract class HighWay 
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    protected function getNbLane(): int
    {
        return $this->nbLane;
    }

    protected function setNbLane(int $nbLane): void 
    {
        $this->nbLane = $nbLane;
    }

    protected function getMaxSpeed(): int 
    {
        return $this->maxSpeed;
    }

    protected function setMaxSpeed(int $axSpeed): void 
    {
        $this->maxSpeed = $maxSpeed;
    }

    protected function getCurrentVehicles(): array 
    {
        return $this->currentVehicles;
    }

    abstract protected function addVehicle(Vehicle $vehicle);
}