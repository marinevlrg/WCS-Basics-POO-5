<?php
require_once 'highway.php';

final class PedestrianWay extends HighWay
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
            $this->currentVehicules[] = $vehicle;
            return 'Let\'s go but don\'t exceed 10km/h !<br>';
        } else {
            return "This vehicle is not available <br>";
        }
    } 
}