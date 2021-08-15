<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunde</title>
    <?php
    include_once('person_class.php');
    ?>
</head>
<body>
<?php

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

var_dump($kunde1);
?>
</body>
</html>