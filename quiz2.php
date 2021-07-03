<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto</title>
</head>
<body>
    <h1>Lottozahlen</h1>
    <?php
// example 1
// check for duplicates
echo "Die gezogenen Zahlen sind: ";
for($i = 0; $i < 6; $i++){
    $numbers[$i] = mt_rand(1, 49);
}
$numbers = array_unique($numbers);
for($i = 0; $i < 6; $i++){
    echo $numbers[$i]. " ,";
}
// example 2
    echo "<br/> Die gezogenen Zahlen sind: ";
        $numbers = range(1, 49);
        shuffle($numbers);
        for($i = 0; $i < 6; $i++){
            echo "$numbers[$i], ";
        }

        
// output biggest num of array
        echo "Die groesste Zahl ist: ".max($numbers);
    ?>
</body>
</html>