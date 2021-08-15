<?php
    // defining a class
    class Carclass {
        
        // attribute
        private $speed = 0;

        // constructor
        public function __construct($default = 0) {
            $this->speed = $default;
            echo "Object created. <br/>";
        }

        // destructor 
        public function __destruct() {
            echo "Object destroyed. <br/>";
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
    // create instances
    $car1 = new Carclass(0);
    $car2 = new Carclass(10);
    $car3 = new Carclass(0);
    unset($car3);


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