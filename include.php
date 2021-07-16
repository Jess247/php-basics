<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using include</title>
    <?php
        include("my_math_functions.inc.php");
    ?>
</head>
<body>
    <?php
    $sum = add(5,21);
    echo $sum;
    echo "<hr/>";

    $sum = subtract($sum, 14);
    echo $sum;
    echo "<hr/>";

    $sum = multiply($sum, 6);
    echo $sum;
    echo "<hr/>";

    $sum = divide($sum,3);
    echo $sum;
    ?>
</body>
</html>