<?php

require_once 'Highway.php';

final class ResidentialWay extends HighWay

{

    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): array
    {
        $message = "<h1> le véhicule " . $vehicle->getName() . " est autorisé à circuler</h1>";
        echo $message;
        $this->setCurrentVehicule($vehicle);
        return $this->getCurrentVehicule();
    }
}
