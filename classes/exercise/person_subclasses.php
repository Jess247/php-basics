<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unterklassen</title>
    <?php
    include_once('person_class.php');
    ?>
</head>
<body>
<?php

    class Mitarbeiter extends Person {
        protected $gruppierung = 123;
        protected $steuerklasse = 1;
        protected $kontonummer = '1234567';

    }

class Kunde extends Person {
    protected $bonitaet;

    function setBonitaet($boni){
        $this->bonitaet = $boni;
    } 

    function getBonitaet() {
        return $this->bonitaet;
    }
}

$kunde1 = new Kunde('Mueller', 'Franz');
$kunde1->setBonitaet(985);
$person1 = new Person('Schmidt', 'Manuela');
$mitarbeiter1 = new Mitarbeiter('Frank', 'Meier');

var_dump($kunde1);
var_dump($person1);
var_dump($mitarbeiter1);

?>
    
</body>
</html>