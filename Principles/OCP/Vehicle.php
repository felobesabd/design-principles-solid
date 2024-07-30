<?php

namespace SOLID\OCP;

abstract class Vehicle implements IMove
{
    private IMove $movable;
    private string $color;
    private int $maxSpeed;
    private Driver $driver;
    private array $routes = [];

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

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function setRoutes(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function getMovable(): IMove
    {
        return $this->movable;
    }

    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

    public function move(): string
    {
        return $this->getMovable()->move();
    }
}