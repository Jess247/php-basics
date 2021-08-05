<?php 
function firstFunction(&$param) {
    $param = $param * 2;
}

function secondFunction($param) {
    $param = $param / 2;
}

$var1 = 10;
$var2 = 20;
$var3 = 30;
$var4 = 0;
$var4 = &$var1;

echo "var4: $var4 <br/>";
echo "$var1 $var2 $var3 $var4 <br/>";

firstFunction($var4);
echo "var1: $var1 <br/>";
echo "Now var4 is $var4 and var2 = $var2 <br/>";

if($var4 > $var2) {
    $var4 =$var2;

} else {
    $var4 = &$var3;
}
echo "Now var4 is $var4 <br/>";

secondFunction($var4);
echo "var4: $var4 $var2 $var1<br/>";
firstFunction($var3);
echo "var1: $var1 <br/>";
echo "var2: $var2 <br/>";
?>