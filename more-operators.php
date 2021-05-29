<?php 

    // compare two numbers
    $sum = 5 > 10; // false
    var_dump($sum);
    $sum = 5 < 10; // true 
    var_dump($sum);

    $num = 100; 
    $sum = $num == 100;
    var_dump($sum);
    $sum = $num === "100";
    var_dump($sum);

    $num1 = 100;
    $num2 = 50;
    $sum = $num1 < $num2;
    var_dump($sum);
    $sum = $num1 > $num2;
    var_dump($sum);


?>