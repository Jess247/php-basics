<?php
    // Trim() gets deletes whitespace or characters you determent in the optional second parameter (only from the beginning or end of a string)
    $a = "\t\t Sampletext";
    var_dump($a);
    echo "<br/>";
    $trimmed = trim($a);
    var_dump($trimmed);
    echo "<br/>";

    $a = "Beispieltext";
    var_dump($a);
    echo "<br/>";
    $trimmed = trim($a, "xBte");
    var_dump($trimmed);

    // max() is used to get the highest value of an array
    $num = [14, 6, 88, 28, 9, 19];
    echo "The highest number of this array is: ".max($num)."!!";
    echo "<br/>";

    // also works with calculations
    echo "<p>The highest value of (22*23), (14*43), (15*24), (46*7), 2, (23*27) is: ".max((22*23), (14*43), (15*24), (46*7), 2, (23*27)). "!!</p><br/>";
    
    // count() counts the elements of an array
    $oddNums = [];
    $elements = 0;

    for($i = 1; $i <= 100; $i++){
        if($i % 2 != 0){
            $oddNums[$elements] = $i;
            $elements++;
        }
    }

    echo '<p>The Array $oddNums contains '.count($oddNums).' elements.</p><br/>';

    // recursive count
    $members = [
        ["Mrs", "Gabriela", "Lopez", "Soccer", "active"],
        ["Mr", "Sam", "Smith", "Football", "passive"],
        ["Mrs", "Tina", "Mitchel", "Track", "active"],
        ["Mrs", "Julia", "Anderson", "Swimming", "active"],
    ];
    echo '<p>One dimensional: '.count($members).'</p>';
    echo '<p>Multi dimensional: '.count($members, COUNT_RECURSIVE).'</p>';

    // Shuffle - shuffles elements of an array randomly (function returns true or false)
    $evenNumbers = [];
    $element = 0;

    for($i = 1; $i <= 10; $i++){
        if($i % 2 == 0){
            $evenNumbers[$element] = $i;
            $element++;
        }
    }
    echo "<ol>";
    foreach($evenNumbers as $key=>$value) {
        echo "<li>The Element with the index $key has the value <b>$value</b></li>";
    }
    echo "</ol>";
    echo "Let's shuffle!";
    if(shuffle($evenNumbers)){
        echo "<ol>";
        foreach($evenNumbers as $key=>$value){
            echo "<li>The element with the index $key has the value <b>$value</b></li>";
        }
        "</ol>";
    }

    // array_reverse()
    $str = [
        "endOfStr" => "world!",
        "begOfStr" => "Hello"
    ];
    print_r($str);
    $reversed = array_reverse($str);
    echo "<hr/>";
    print_r($reversed);
    echo "<br/>";

    // get the length of a string 
    $str = "Hello World!";
    echo strlen($str);

    $strArr = [
        "Medium length string",
        "I am a longer string, count how long I am!",
        "I am short"
    ];
    foreach($strArr as $str) {
        echo "<p>The string \"$str\" is ".strlen($str)." characters long!</p>";
    }

    // access single characters from a sting
    foreach($strArr as $str) {
        $vowls = ["a", "e", "i", "o", "u"];
        $counter = 0;
        for($i = 0; $i < strlen($str); $i++){
            if(in_array($str[$i], $vowls)) {
                $counter++;
            }
        }
        echo "<p>The string \"$str\" contains $counter vowl(s)</p>";
    }

    // check if a string is lower or uppercase
    $low = "THIS STRING WILL BE IN LOWER CASE!";
    $up = "this will be uppercase";

    echo '<p>Now '.strtolower($low).' and '. strtoupper($up). ' !</p>';

    

?>