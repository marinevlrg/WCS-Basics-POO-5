
  <?php

    // Bicycle.php

    require_once 'vehicle.php';
    require_once 'interfaces.php';

    class Bicycle extends Vehicle implements LightableInterface
    {
      protected int $currentSpeed;

      public function getCurrentSpeed(): int
      {
       return $this->currentSpeed;
      }

       public function setCurrentSpeed(int $currentSpeed): void
       {
         if ($currentSpeed >= 0) {
          $this->currentSpeed = $currentSpeed;
        }
      }
      public function switchOn(): bool
      {
        if ($currentSpeed >= 10) {
          return $this->true;
        } else {
          return $this->false;
        }
      }
    }
