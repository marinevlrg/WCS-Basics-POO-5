<?php
require_once 'highway.php';
final class ResidentialWay extends HighWay
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
        $this->currentVehicules[] = $vehicle;
        return 'Let\'s go but don\'t exceed 50 km!! <br>';
    }
}