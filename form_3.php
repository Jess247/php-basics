<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another form</title>
    <?php
    require("my_math_functions.inc.php");
    ?>
</head>
<body>
<?php
if(isset($_POST["num1"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $sum = multiply($num1, $num2);

    echo "<h3>$num1 * $num2 = $sum</h3>";
}
// makes sure that the form wont be shown once its been submitted
    else {

    ?>
<!-- left empty (it will automatically choose the current file) -->
<form action=" method="post">
        <p>
        <label for="num1">Fist number: </label>
            <input type="text" name="num1" placeholder="Enter number please..." required autofocus >
        </p>
        <p>
            <label for="num2">Fist number: </label>
            <input type="text" name="num2" placeholder="Enter number please..." required >
        </p>
        <input type="submit" value="Calculate">
        <input type="reset" value="Reset">
    </form>
    <?php
    } // else closing tag
    ?>
</body>
</html>