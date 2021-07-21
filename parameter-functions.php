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
    ?>
</body>
</html>