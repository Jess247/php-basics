<?php
// if statements
$price = 5;

if($price < 5) {
    echo "Buy now!";
}

$degCelsius = 25;

if($degCelsius >= 25) {
    echo "Go for a swim!";
}

// if else 
$rain = true;

if($rain) {
    echo "Take your umbrella.";
} else {
    echo "You can leave your umbrella at home";
}

// nested if statements
$age = 39;

if($age > 18) {
    if($age < 30) {
        echo "You arent 30 yet!"
    }
}

//  better practice in this case would be
if($age > 18 && $age < 30) {
        echo "You arent 30 yet!"
}

// elseif

if($age > 18){
    echo "You are underaged";
} elseif($age > 18 && $age < 30) {
    echo "You are under 30";
} else {
    echo "You are older than 30";
}

?>