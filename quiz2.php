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
$gezogen = [];
while( count($gezogen) < 6 ){
    $lottozahlen = mt_rand(1,49);
    $gezogen[$lottozahlen] = $lottozahlen;
    echo $gezogen[$lottozahlen].", ";
}

// example 2
    echo "<br/> Die gezogenen Zahlen sind: ";
        $numbers = range(1, 49);
        $chosenNumbers = [];
        shuffle($numbers);
        for($i = 0; $i < 6; $i++){
            echo $numbers[$i].", ";
            $highestNumbers[$i] = $numbers[$i]; 
        }
        sort($highestNumbers);
        echo "The highest number is: ".$highestNumbers[(count($highestNumbers)-1)]."<br/>";

        // highest number with loop
        $arr = [5, 6, 23, 16, 42, 33];
        $highest = 0;
        for($i = 0; $i < count($arr); $i++){
            echo "This is the $i element of the array: " .$arr[$i]. ", ";
            if($highest < $arr[$i]){
                $highest = $arr[$i];
                // to demonstrate the changes of tha variable highest
                echo "<p>$highest</p>";
            }
        }

    ?>
</body>
</html>