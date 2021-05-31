<?php
    // "and" and  &&
    $num1 = 10;
    $num2 = 20;

    echo "&& Example 1: ";
    $result = $num1 <= $num2 && $num1 == 10;
    var_dump($result);
    
    $result = $num1 <= $num2 && $num2 == 10;
    var_dump($result);
    echo "<br/>";

    // "and" and && do the same but they have a different rank. In this example it has the lowest rank.
    echo "'and' Example 2: ";
    $result = $num1 <= $num2 and $num1 == 10;
    var_dump($result);

    $result = $num1 <= $num2 and $num2 == 10; // false with &&
    var_dump($result);

    $result = ($num1 <= $num2 and $num2 == 10); // solves issue
    var_dump($result);
    echo "<br/>";

    // "or" and ||
    echo "|| Example 3: ";
    $result = $num1 <= $num2 || $num1 == 10;
    var_dump($result);
    
    $result = $num1 > $num2 || $num2 == 10;
    var_dump($result);
    echo "<br/>";

    echo "'or' Example 3: ";
    $result = $num1 <= $num2 or $num1 == 10;
    var_dump($result);
    
    $result = $num1 <= $num2 or $num2 == 10;
    var_dump($result);

    

?>