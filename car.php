
  <?php

    // car.php
require_once 'vehicle.php';
require_once 'interfaces.php';

    class Car extends Vehicle implements LightableInterface
    {
        public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];

        
        protected string $energy;

        protected int $energyLevel;

        private bool $hasParkBrake = true;

        public function __construct(string $color, int $nbSeats, string $energy)
        {
            parent::__construct($color, $nbSeats);
            $this->setEnergy($energy);
        }

        public function getEnergy(): string
        {
            return $this->energy;
        }

        public function setEnergy(string $energy): Car
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }

        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }

        public function start()
        {
            if ($this->getHasParkBrake()) {
                throw new Exception("Park brake is activated !");
            }
            echo $this->forward(15);
            return "Go !" . "<br>";
        }
        

        /**
         * Get the value of hasParkBrake
         */ 
        public function getHasParkBrake()
        {
                return $this->hasParkBrake;
        }

        /**
         * Set the value of hasParkBrake
         *
         * @return  self
         */ 
        public function setHasParkBrake($hasParkBrake)
        {
                $this->hasParkBrake = $hasParkBrake;

                return $this;
        }

        public function switchOn(): bool
        {
            return $this->true;
        }
        public function switchOff(): bool
        {
            return $this->false;
        }
    }
