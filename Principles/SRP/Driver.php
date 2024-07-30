<?php

namespace SOLID\SRP;

class Driver
{
    private string $name;
    private int $age;
    private string $insurance;
    private string $address;

    public function __construct(string $name, int $age, string $insurance, string $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->insurance = $insurance;
        $this->address = $address;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getInsurance(): string
    {
        return $this->insurance;
    }

    public function setInsurance(string $insurance): void
    {
        $this->insurance = $insurance;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}