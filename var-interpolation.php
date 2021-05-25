<?php 

    $name = "Jess";
    $age = "28";
    echo '<p>My name is '.$name .'!</p>';
    // string parsing when double quotes are used
    echo "<p>My name is $name! I am $age years old.</p>"; // also more readable
    echo "<p>{$name}'s birthday is in June!</p>"; 


?>