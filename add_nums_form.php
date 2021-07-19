<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <?php
        // we will include the file with the math functions 
        require("my_math_functions.inc.php");
    ?>
</head>
<body>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    // sum gets the return value of the add function out of the included file
    $sum = add($num1, $num2);

    echo "<h2>The sum of $num1 + $num2 is $sum</h3>\n";

    // there is a much shorter way in a single line
    echo "<h3>{$_POST['num1']} + {$_POST['num2']} = ".add($_POST['num1'], $_POST['num2'])." </h3>";

    ?>
</body>
</html>