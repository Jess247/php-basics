<?php

$breed = "Border Collie";
$type = "scotish";
$weight = "22 kg";
$height = "50 cm";


echo <<<TEXT
    <h1 style="color:blue">$breed</h1>
    <p>A great dog for an active family is the $breed. <br/> 
    The $type type can be around $height high and can weigh up to $weight.
    </p>
TEXT;

$myText = <<<TEST
<h1 style="color:blue">$breed</h1>
<p>A great dog for an active family is the $breed. <br/> 
The $type type can be around $height high and can weigh up to $weight.
</p>
TEST;


?>