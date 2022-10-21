<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, string $name)
    {
        parent::__construct($color, $nbSeats, $name);
        $this->setEnergy($energy);
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
