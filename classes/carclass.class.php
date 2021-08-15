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
            echo "The current speed is: ". $this->speed ." km/h<br/>";
        }
    }

?>