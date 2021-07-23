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
<!-- 
    ################## NOTE ######################
    url is modified, all parameters are part of the url and the user can see the parameters in the url
    this can be useful for transporting data to a php file 
    for sensitive data this is not the best methods because it can easy be manipulated and the data is
    shown in the URL
 -->
<?php
if(isset($_GET["num1"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $sum = multiply($num1, $num2);

    echo "<h3>$num1 * $num2 = $sum</h3>";
}

    ?>
<!-- instead of using the php line in the action attribute it can also be left empty (it will automatically choose the current file) -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
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
</body>
</html>