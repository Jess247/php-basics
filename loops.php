<?php 
// for loops
for($i = 1; $i <= 10; $i++) {
    echo $i;
}

// do while loops
$num = 0;
const END = 20;
do {
    $num++;
    echo $num;
}while($num <= END)
// while loop
while($num < END) {
    $num++;
    echo $num;
}
// break 
// will output "You are not a Teenager yet" and end the loop
$age = 12;
$flag = true;
while($age <= 18) {
    if($age <= 12 && $flag == true){
        echo "You are not a Teenager yet!";
        break;
    }
echo "You are a Teenager!";
}

// continue
$year = 1999;
while($year <= 2017) {
    if(($year % 400) == 0 || (($year % 4) == 0 && ($year % 100) != 0)){
        $year++;
        continue;
    }
    echo "$year was no leap year";
}

?>