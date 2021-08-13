<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
    <?php
        // includes the car class from another file with autoload function
        include_once("autoload.inc.php");
    ?>
</head>
<body>
    <?php
        // create a child class from Carclass SportsCar inherits the attributes and methods
        class SportsCar extends Carclass {
            //  even if this class is empty all attributes form the parent class can be changed

            private $maxSpeed = 0;
            private $speedControl = true;
            private $carbonBrakes = true;

            public function setMaxSpeed($value) {
                $this->maxSpeed = $value;
            }
            public function getMaxSpeed() {
                return $this->maxSpeed;
            }

            public function output() {
                Carclass::output(); // prevents overriding of the function from parent class
                //parent::output; works just the same as the above
                echo "The max. speed is: ". $this->maxSpeed ."km/h <br/>";
            }
        }
        // initializing a new object
        $audi = new SportsCar(250);
        $audi->setMaxSpeed(279);
        $audi->output();
    ?>
    
</body>
</html>