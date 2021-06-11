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
        echo "You arent 30 yet!";
    }
}

//  better practice in this case would be
if($age > 18 && $age < 30) {
        echo "You arent 30 yet!";
}

// elseif

if($age > 18){
    echo "You are underaged";
} elseif($age > 18 && $age < 30) {
    echo "You are under 30";
} else {
    echo "You are older than 30";
}

// Switch case
$weekday = 3;
switch ($weekday) {
    case 0:
        $day = "Sunday";
        break;
    case 1:
        $day = "Monday";
        break;
    case 2:
        $day = "Tuseday";
        break;
    case 3:
        $day = "Wednesday";
        break;
    case 4:
        $day = "Thursday";
        break;
    case 5:
        $day = "Friday";
        break;
    case 6:
        $day = "Saturday";
        break;
}

echo "Today is $day";

// nested Switch case
$weekday = 3;
switch ($weekday) {
    case 0;
        $day = "Sunday";
        switch ($time){
            case "morning";
            $task = "Drink coffee";
            break;
            case "noon";
            $task = "Eat Lunch";
            break;
            case "evening";
            $task = "Go to bed";
            break;
        }
        echo "it is $time. $task";
        break;
    case 1;
        $day = "Monday";
        break;
    case 2;
        $day = "Tuseday";
        break;
    case 3;
        $day = "Wednesday";
        break;
    case 4;
        $day = "Thursday";
        break;
    case 5;
        $day = "Friday";
        break;
    case 6:
        $day = "Saturday";
        break;
}

echo "Today is $day";

// examples

$num1 = 14;
$num2 = 55;

if($num1 < $num2){
    echo "{$num1} hat den wert $num1. {$num2} hat den Wert $num2 und ist somit groesser";   
}

?>