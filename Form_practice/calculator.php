<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <?php 
        require("math_functions.php");
    ?>
</head>
<body> 
<?php 
$operation = $_POST["operator"];
$num1 = $_POST["number1"];
$num2 = $_POST["number2"];

if(isset($_POST["operator"])) {
    switch($operation){
        case $operation == "addition":
            $sum = add($num1,$num2);
            echo "<h1>$num1 + $num2 = ".$sum."</h1>";
            break;
        case $operation == "subtraction":
            $sum = subtract($num1,$num2);
            echo "<h1>$num1 - $num2 = ".$sum."</h1>";
            break;
        case $operation == "multiplication":
            $sum = multiply($num1,$num2);
            echo "<h1>$num1 * $num2 = ".$sum."</h1>";
            break;
        case $operation == "division":
            $sum = divide($num1,$num2);
            echo "<h1>$num1 / $num2 = ".$sum."</h1>";
            break;
        
    }
}
    
?>
    <h3>Bitte geben sie die beiden Zahlen in die Felder ein.</h3>
    <form action="" method="post">
        <p>
            <label for="number1">Zahl 1: </label>
            <input type="text" name="number1" placeholder="Bitte die erste Zahl eingeben" require>
        </p>
        <p>
            <label for="number2">Zahl 2: </label>
            <input type="text" name="number2" placeholder="Bitte die zweite Zahl eingeben" require>
        </p>
        <p>
            <input type="radio" name="operator" value="addition">
            <label for="addition">+</label>
        </p>
        <p>
            <input type="radio" name="operator" value="subtraction">
            <label for="subtraction">-</label>
        </p>
        <p>
            <input type="radio" name="operator" value="multiplication">
            <label for="multiplication">*</label>
        </p>
        <p>
            <input type="radio" name="operator" value="division">
            <label for="division">/</label>
        </p>
        <p>
            <input type="submit" name="calc" value="Rechnen">
        </p>

    </form>
</body>
</html>