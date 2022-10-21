<?php

// Vehicle.php

class Vehicle
{

    protected string $color; //commun à toutes les classes enfant

    protected int $currentSpeed; //commun à toutes les classes enfant

    protected int $nbSeats; //commun à toutes les classes enfant

    protected int $nbWheels; //commun à toutes les classes enfant

    protected const ALLOWED_ENERGIES = [ //commun à toutes les classes enfant pour faire simple
        'fuel',
        'electric',
        'huile de coude',
    ];


    protected string $energy; //commun à toutes les classes enfant pour faire simple pour l'exercice.

    protected string $name; // Nom du véhicule

    public function __construct(string $color, int $nbSeats, string $name) //réutilisé dans les classes enfant
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->name = $name;
    }

    public function setEnergy(string $energy): Vehicle //commun à toutes les classes enfant
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getenergy(): string //commun à toutes les classes enfant
    {
        return $this->energy;
    }

    public function forward(): string /*commun à toutes les classes enfant. On pourrait créer un vitesse différente par classe enfant
    mais pour faire simple, toutes les classes enfant ont la même vitesse*/
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string /*commun à toutes les classes enfant. On pourrait créer une décélation différente par classe enfant
    mais pour faire simple, toutes les classes enfant ont la même décélération*/
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getCurrentSpeed(): int //commun à toutes les classes enfant
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void //commun à toutes les classes enfant
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string //commun à toutes les classes enfant
    {
        return $this->color;
    }

    public function setColor(string $color): void //commun à toutes les classes enfant
    {
        $this->color = $color;
    }

    public function getNbSeats(): int //commun à toutes les classes enfant
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void //commun à toutes les classes enfant
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int //commun à toutes les classes enfant
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void //commun à toutes les classes enfant
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
