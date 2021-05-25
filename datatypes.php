<?php
    $gameOver = false; // boolean - true or false
    $score = 1234; // integer -  positiv or negativ number
    $circleRatio = 3.14; // float 
    $player = "Jess"; // String

    // integers 
    $dual = 0b110110; // decimal = 54
    $decimal = 54;
    $octal = 066; // decimal = 54
    $hex = 0x36; // decimal = 54

    // floats
    $floatNum = 98.3;
    $floatNum2 = 4e-4; // 0.0004

    $num = 10;
    Var_dump($num); // a function that outputs the Datatyp of the variable
    $num += 1.52;
    Var_dump($num); // integers can be turned into floats but not the otherway around 
    $num -= .52;
    Var_dump($num); // will still be a float 

    // Strings
    $numStr = "34"; // is a String
    $numNotStr = 34; // not a string 
    $str = "Hello world!";
    Var_dump($str);

    $single = 'I am a single quotes string';
    $double = "I am a double quotes string";
    $mix = '<img src="www.img.com" width="50" height="50" alt"sample image">';
    $mix = "<img src=\"www.img.com\" width=\"50\" height=\"50\" alt\"sample image\">"; // also works 

?>