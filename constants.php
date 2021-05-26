<?php 
    // define and use constats
    const DIESEL = 1.38;
    define("PETROL", 1.55);

    $liter = 50;
   echo "<p>$liter liter diesel const ".$liter * DIESEL ." Euro</p>";
   echo "<p>$liter liter petrol const ".$liter * PETROL ." Euro</p>";

    // predefinded constants
    echo "PHP-Version: ".PHP_VERSION . "<br/> \n";
    echo "Highest integer value: " .PHP_INT_MAX . "<br/> \n";
    echo "Pi: " .M_PI . "<br/> \n";
    echo "System: " .PHP_OS . "<br/> \n";
    echo "list of all predefinde constants: https://www.php.net/manual/en/reserved.constants.php <br/> \n";

    echo "The file name is : ". __file__ ;
    echo "The Line number is : ". __line__;




?>