<?php

abstract class HighWay
{
    private array $currentVehicule = [];
    private int $nbLane;
    private int $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    /**
     * Get the value of currentVehicule
     */
    public function getCurrentVehicule(): array
    {
        return $this->currentVehicule;
    }

    /** 
     * Set the value of currentVehicule
     *
     * @return  self
     */
    public function setCurrentVehicule($currentVehicule)
    {
        $this->currentVehicule[] = $currentVehicule;

        return $this;
    }

    /**
     * Get the value of nblane
     */
    public function getNblane(): int
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nblane
     *
     * @return  self
     */
    public function setNblane($nbLane)
    {
        $this->nblane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
