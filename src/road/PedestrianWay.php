<?php

require_once 'Highway.php';

final class PedestrianWay extends HighWay

{

    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): array
    {
        $this->getCurrentVehicule();
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $message = "<h1> le véhicule " . $vehicle->getName() . " est autorisé à circuler</h1>";
            echo $message;
            $this->setCurrentVehicule($vehicle);
            return $this->getCurrentVehicule();
        } else {
            $warning = "<h1> le véhicule " . $vehicle->getName() . " est interdit de circuler</h1>";
            echo $warning;
            return $this->getCurrentVehicule();
        }
    }
}
