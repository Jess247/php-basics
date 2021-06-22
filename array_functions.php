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
    

?>