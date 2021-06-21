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
    echo "<br/>";

    // associative array
    $countryCode = [];
    $countryCode["Australia"] = "AUS";
    $countryCode["Sri Lanka"] = "CL";
    $countryCode["Fiji"] = "FJI";
    $countryCode["Germany"] = "GER";

    var_dump($countryCode);
    echo "<br/>";
    print_r($countryCode); 
    echo "<br/>";

    // accessing elements
    echo $countryCode["Australia"];
    echo "variable interpolation does not work with array, you need to wrap the array in curly brackets! <br/> The Country code of Australia is: {$countryCode["Australia"]} <br/>";

    // pre defined arrays
    // $_SERVER is a superglobal (always and everywhere accessible)
     foreach($_SERVER as $key=>$value) {
         echo "<p>Key: $key has the value $value</p>";
     }

    //  foreach can be used with associative arrays
    $oddNumbers = [];
    $element = 0;

    for($i = 1; $i <= 100; $i++){
        if($i % 2 != 0){
            $oddNumbers[$element] = $i;
            $element++;
        }
    }
    echo "<ol>";
    foreach($oddNumbers as $key=>$value) {
        echo "<li>The Element with the index $key has the value <b>$value</b></li>";
    }
    echo "</ol>";


?>