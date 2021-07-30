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


$prov = $_POST["provision"];
function calc($num1, $num2, $num3, $prov) {
    if(!empty($_POST["mwst"])) {
        $mwst = 1.19;
    } else {
        $mwst = 1;
    }


    $preis = $num1 * $num2 * $num3;
    $provPr = intval(($preis / 100) * $prov);
    $nettoPrProv = $preis + $provPr;
    $result = $nettoPrProv * $mwst;
    echo "Breite: $num1 m</br>
          laenge: $num2 m</br>
          preis qm: $num3 $</br>
          netto: $preis $ </br>
          netto prov: $nettoPrProv $ </br>
          butto:  $result$";
 
}



if(isset($_POST["number1"])){
    calc($num1, $num2, $num3, $prov);
}
    
?>
    <h1>Bitte geben sie die beiden Zahlen in die Felder ein!</h1>
    <form action="" method="post">
        <p>
            <label for="number1">Zahl 1: </label>
            <input type="text" name="number1" value="<?php echo $_POST["number1"]; ?>" placeholder="Gib eine Zahl ein..." require>
        </p>
        <p>
            <label for="number2">Zahl 2: </label>
            <input type="text" name="number2" value="<?php echo $_POST["number2"]; ?>" placeholder="Gib eine Zahl ein..." require>
        </p>
        <p>
            <label for="number3">Zahl 3: </label>
            <input type="text" name="number3" value="<?php echo $_POST["number3"]; ?>" placeholder="Gib eine Zahl ein..." require>
        </p>
        <p>
        <label for="prov">Provision: </label>
        <select name="provision" id="prov">
            <option value="3" 
            <?php if(isset($_POST["provision"])){
                if($_POST["provision"] == "3"){
                    echo "selected";
                }
            } 
            ?>>3</option>

            <option value="4" 
            <?php if(isset($_POST["provision"])){
                if($_POST["provision"] == "4"){
                    echo "selected";
                }
            } 
            ?>>4</option>

            <option value="5" 
            <?php if(isset($_POST["provision"])){
                if($_POST["provision"] == "5"){
                    echo "selected";
                }
            } 
            ?>>5</option>

            <option value="6" 
            <?php if(isset($_POST["provision"])){
                if($_POST["provision"] == "6"){
                    echo "selected";
                }
            } 
            ?>>6</option>
            <option value="7" 
            <?php if(isset($_POST["provision"])){
                if($_POST["provision"] == "7"){
                    echo "selected";
                }
            } 
            ?>>7</option>
        </select>
        </p>
        <p>
            <input type="checkbox" name="mwst" value="mwst"
            <?php if(isset($_POST["mwst"])){
                if($_POST["mwst"] == "mwst"){
                    echo "checked";
                }
            }?>>
            <label for="mwst">MwSt</label>
        </p>
        <p>
            <input type="submit" name="calc" value="Calculate">
        </p>

    </form>
</body>
</html>