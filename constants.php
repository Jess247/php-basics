<?php 
    // define and use constants
    const DIESEL = 1.38;
    define("PETROL", 1.55);

    $liter = 50;
   echo "<p>$liter liter diesel const ".$liter * DIESEL ." Euro</p>";
   echo "<p>$liter liter petrol const ".$liter * PETROL ." Euro</p>";

    // predefined constants
    echo "PHP-Version: ".PHP_VERSION . "<br/> \n";
    echo "Highest integer value: " .PHP_INT_MAX . "<br/> \n";
    echo "Pi: " .M_PI . "<br/> \n";
    echo "System: " .PHP_OS . "<br/> \n";
    echo "list of all predefined constants: https://www.php.net/manual/en/reserved.constants.php <br/> \n";

    echo "The file name is : ". __file__ ;
    echo "The Line number is : ". __line__;




?>