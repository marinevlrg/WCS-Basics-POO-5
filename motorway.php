<?php
require_once 'highway.php';

final class MotorWay extends HighWay
{
    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
        return $this;
    }
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
    public function addVehicule(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {          
           return 'This vehicle is not available <br>';
        } else {
            $this->currentVehicules[] = $vehicle;
            return "This vehicle is allowed <br>";
        }
    }
}