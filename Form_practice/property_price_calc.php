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
$num1 = $_POST["number1"];
$num2 = $_POST["number2"];
$num3 = $_POST["number3"];

$mwst = 1.19;
$prov = $_POST["privision"];
$provNum = int($prov) / 100;
function calc() {
    
}
    
?>
    <h1>Bitte geben sie die beiden Zahlen in die Felder ein!</h1>
    <form action="" method="post">
        <p>
            <label for="number1">Zahl 1: </label>
            <input type="text" name="number1" placeholder="Gib eine Zahl ein..." require>
        </p>
        <p>
            <label for="number2">Zahl 2: </label>
            <input type="text" name="number2" placeholder="Gib eine Zahl ein..." require>
        </p>
        <p>
            <label for="number2">Zahl 3: </label>
            <input type="text" name="number2" placeholder="Gib eine Zahl ein..." require>
        </p>
        <p>
        <label for="prov">Provision: </label>
        <select name="provision" id="prov">
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
        </p>
        <p>
            <input type="checkbox" name="mwst" value="mwst">
            <label for="mwst">MwSt</label>
        </p>
        <p>
            <input type="submit" name="calc" value="Calculate">
        </p>

    </form>
</body>
</html>