<?php
namespace SOLID\SRP;

class Bus
{
    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maxSpeed;
    private Driver $driver;
    private int $doors;
    private array $routes = [];

    public function __construct(
        int $busNumber, int $numberOfPassengers, string $color, int $maxSpeed,
        Driver $driver, int $doors, array $routes
    )
    {
        $this->busNumber = $busNumber;
        $this->numberOfPassengers = $numberOfPassengers;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        $this->driver = $driver;
        $this->doors = $doors;
        $this->routes = $routes;
    }

    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function getDoors(): int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function setRoutes(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function move(): string
    {
        $output = '';
        foreach ($this->getRoutes() as $route) {
            $output .= '<p> move from ' .
                $route->getSource() .
                ' to ' . $route->getDestination() .
                ' at maximum speed of ' . $this->maxSpeed .
                ' the driver is ' . $this->driver->getName() . ' </p>';
        }
        return $output;
    }
}
