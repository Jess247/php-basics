<?php
    // defining a class
    class Carclass {
        
        // attribute
        private $speed = 0;

        // methods to initialize
        public function initialize($standard) {
            $this->speed = $standard;
        }

        // break
        public function brake($changes) {
            if($this->speed - $changes < 0) {
                $this->speed = 0;
            }
            else {
                $this->speed - $changes;
            }
        }

        // accelerate
        public function accelerate($change) {
            $this->speed = $this->speed + $change;
        }

        // output current speed
        public function output() {
            echo "The current speed is ". $this->speed .": ";
        }
    }

    $car1 = new Carclass();
    $car2 = new Carclass();

    // call initialize function
    $car1->initialize(0);
    $car2->initialize(10);

    echo "<hr/>";
    echo "After initializing: ";
    $car1->output();
    $car2->output();
    //call method accelerate
    $car1->accelerate(20);
    $car2->accelerate(100);
    echo "<hr/>";
    echo "After accelerating: ";
    $car1->output();
    $car2->output();
    echo "<hr/>";
    // call brake method
    $car1->brake(10);
    $car2->brake(50);
    echo "<hr/>";
    echo "After accelerating: ";
    $car1->output();
    $car2->output();
    echo "<hr/>";

?>