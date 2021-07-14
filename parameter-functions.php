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

    ?>
</body>
</html>