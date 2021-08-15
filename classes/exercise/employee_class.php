<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitarbeiter</title>
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

    $mitarbeiter1 = new Mitarbeiter('Frank', 'Meier');
    var_dump($mitarbeiter1);
?>
    
</body>
</html>