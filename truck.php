
  <?php

    // truck.php
require_once 'vehicle.php';

    class Truck extends Vehicle
    {
        protected int $capacity;
        protected int $cargo = 0;

        public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
        {
            parent::__construct($color, $nbSeats, $energy);
            $this->setCapacity($capacity);
        }

        public function getCapacity(): int
        {
            return $this->capacity;
        }
        public function setCapacity($capacity): void
        {
            if ($capacity > 0) {
                $this->capacity = $capacity;
            }
            $this->capacity;
        }

        public function getCargo()
        {
            return $this->cargo;
        }

        public function setCargo(int $cargo): void
        {
            $this->cargo = $cargo;
        }

        public function isFull(): string
        {
            if ($this->cargo === $this->capacity) {
                return "Is full !";
            }
            if ($this->cargo > $this->capacity) {
                return "It's almost full";
            }
            return "In filling.";
        }
    }
