<?php
namespace SOLID\OCP;

class Bus extends Vehicle
{
    private int $busNumber;
    private int $numberOfPassengers;
    private int $doors;

    public function __construct(int $busNumber, int $numberOfPassengers, int $doors)
    {
        $this->busNumber = $busNumber;
        $this->numberOfPassengers = $numberOfPassengers;
        $this->doors = $doors;
    }

    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }
}
