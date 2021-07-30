<?php 

function calc($num1, $num2, $num3, $prov, $mwst) {
    $preis = $num1 * $num2 * $num3;
    $provPr = ($preis / 100) * $prov;
    $nettoPrProv = $preis + $provPr;
    $result = $nettoPrProv * $mwst;
    echo $result;
}
$num1 = 6;
$num2 = 12;
$num3 = 225;
$mwst = 1.19;
$prov = 5;

calc($num1, $num2, $num3, $prov, $mwst) ;

    
?>