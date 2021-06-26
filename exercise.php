<?php
// Turn the following array into a string
$arr = ["I", "am", "a", "string! <br/>"];
$newArr = implode(" ", $arr);

echo $newArr;

// how many elements does the array in the following script hold?
$numbers = array(0);
$i = 32;
$j = $i / 8; // 4
$e = $i * ($j - $i) * (-1) + 50;
for($i = $j; $i <= $e; $i++){
    $numbers[] = $i;
}
$elements = count($numbers);
echo "There are $elements elements in this array <br/>";

// use a function range()
array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
foreach(range(0, 7) as $number) {
    echo $number;
}

// change the following string in to a string of only uppercase letters.
$s = "make me upper case";
echo "<br/>". strtoupper($s);
?>