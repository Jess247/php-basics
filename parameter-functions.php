<?php
    // switches the strict datatype deceleration on
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Functions</title>

    <?php
    // function with parameters - deceleration
    function square($squareNum) {
        echo "The square of $squareNum equals: ".($squareNum * $squareNum).".\n";
    }

    // function with multiple parameters
    function areaCal($height, $width, $unit) {
        echo "<br/>The area of the rectangle is: ".($height * $width)."$unit.\n";
    }

    // Function with a parameter with a default value
    function areaCalDefault($height, $width, $unit = "meter") {
        echo "<br/>The area of the rectangle is: ".($height * $width)."$unit.\n";
    }

    // function with type deceleration (type hints)
    function circle(int $radius, string $unit) {
        echo "<br/>The perimeter of the circle is: ".(2 * pi() * $radius)." $unit";
    }

    //  variable argument list (function with out a specific number of parameters)
    // func_get_args() - returns all parameters
    function calcSum() {
        $numbers = func_get_args();
        $sum = 0;
        if(is_array($numbers)){
            foreach($numbers As $value) {
                $sum += $value;
            }
            echo "<p>$sum</p>\n";
        }
    }

    function calcSumTwo() {
        $sum = 0;
        for($i = 0; $i < func_num_args(); $i++){
            $sum += func_get_arg($i);
        }
        echo "<p>$sum</p>\n";
    }

     // function with ... token
    function calcSumThree(... $numbers) {
        $sum = 0;
            foreach($numbers As $value) {
                $sum += $value;
            }
            echo "<p>$sum</p>\n";
        }
    // there are functions that pass arguments by value
    function func_double($num) {
        $num = $num * 2;
        echo "<p>This is the value of the num variable out of the function: ".$num. "</p>\n";
    }

    // and functions that pass values by reference 
    function func_doubleTwo(&$param) {
        $param = $param * 2;
    }

    // function with return value and specific datatype
    function add($num): int {
        $sum = 0;
        foreach($num as $value){
            $sum += $value;
        }
        return $sum;
    }
?>

</head>
<body>
    <h1>Functions with parameter</h1>
    <?php
    // calling function 
    $num = 4; 
    square(5);
    square($num);

    areaCal(15, 24, "cm");

    // function call with default value
    areaCalDefault(3, 5);

    // function with type hints 
    circle(11, "decimeter");

    // func_ functions
    calcSum(1,3,4,5,6,3,5);
    calcSumTwo(1,3,4,5,6,3,5);

    // function with token
    calcSumThree(1,3,4,5,6,3,5);

    // scope and global variables
    function calc(...$num) {
        global $result;
        foreach($num as $value) {
            $result += $value;
        }
    }
    $result = 0;
    calc(1,4,5,7,3,5,4,3);
    echo "<p>$result</p>\n";

    // associative array $GLOBAL
    function addNums(... $num) {
        foreach($num as $value){
            $GLOBALS[$num] += $value;
        }
    }
    $sumTwo = 0;
    addNums(3,5,2,4,5,6,7);
    echo "<p>$sumTwo</p>";

    // functions by value
    $num = 10;
    func_double($num);
    echo "<p>And this is the value of the variable outside of the function: $num</p>";

    // because we used a reference in the function the value of $num will double because of the function doubleTwo
    func_doubleTwo($num);
    echo "<p>This is the value of the reference value of the function: $num</p>";
    
    // function with return value
    $sum = add(array(1,3,4,5,6,5,4,3));
    echo "<p>$sum</p>";
    ?>
    
</body>
</html>