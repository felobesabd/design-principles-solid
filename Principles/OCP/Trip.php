<?php

namespace SOLID\OCP;

class Trip
{
    private IMove $movable;
    private string $tripNumber;
    private float $tripPrice;
    private int $duration;

    public function __construct(IMove $movable, string $tripNumber, float $tripPrice, int $duration)
    {
        $this->movable = $movable;
        $this->tripNumber = $tripNumber;
        $this->tripPrice = $tripPrice;
        $this->duration = $duration;
    }

    public function getVehicle(): IMove
    {
        return $this->movable;
    }

    public function setVehicle(IMove $movable): void
    {
        $this->movable = $movable;
    }

    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function move(): string
    {
        return $this->movable->move();
    }

}