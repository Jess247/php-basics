<?php
    // How to declare an array
    $arr = array();
    $arr[] = "First element";
    $arr[] = "Second element";
    $arr[] = "Third element";

    var_dump($arr);
    echo "<br/>";

    // other ways to declare or initialize an array
    $arrTwo = array("One", "Two", "Three");
    var_dump($arrTwo);

    $arrThree = ["four", "five", "six"];

    // access items form array
    echo $arr[0];
    echo "<br/>";

    // add elements to array
    $arrThree = [0 => "One",
                 1 => "Two",
                 2 => "Three"];
    
    var_dump($arrThree);

    $arrThree[5] = "Four";

    var_dump($arrThree);
    echo "<br/>";

    // add elements to an array using a loop
    $evenNumbers = [];
    $element = 0;

    for($i = 1; $i <= 100; $i++){
        if($i % 2 == 0){
            $evenNumbers[$element] = $i;
            $element++;
        }
    }
    var_dump($evenNumbers);




?>