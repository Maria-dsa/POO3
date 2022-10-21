<?php

require_once 'Highway.php';

final class MotorWay extends HighWay

{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }



    public function addVehicle(Vehicle $vehicle): array
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $warning = "<h1> le véhicule " . $vehicle->getName() . " est interdit de circuler</h1>";
            echo $warning;
            return $this->getCurrentVehicule();
        } else {
            $message = "<h1> le véhicule " . $vehicle->getName() . " est autorisé à circuler</h1>";
            echo $message;
            $this->setCurrentVehicule($vehicle);
            return $this->getCurrentVehicule();
        }
    }
}
