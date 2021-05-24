<?php
    // Arithmetic Operators
    $num1 = 20;
    $num2 = 10;
    $sum = $num1 + $num2; // addition 30
    $sum = $num1 - $num2; // subtraction 10
    $sum = $num1 * $num2; // multiplication 200
    $sum = $num1 / $num2; // division 2
    $sum = $num1 % $num2; // Modulo 0

    // combined operators
    $num3 = 10;
    $num3 = $num3 + 2; // is possible but could also be written as the following example
    $num3 += 2; // combined operator works with all operators

    // increment and decrement operators
    $num4 = 10;
    ++$num4; // 11
    $num4++; // first 11 then increments to 12
    --$num4; // 11
    $num4--; // first 11 then decrements to 10

    // also works with characters
    $char = "a";
    ++$char; // b

    // concatenation operator
    echo "I am " .$num1 . "years old."; // outputs I am 20 years old.

    $text = "Good ";
    $text .= "morning!";

    echo $text; // outputs Good morning
?>