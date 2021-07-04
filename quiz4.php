<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einsendeaufgabe Nr. 5</title>
</head>
<body>
    <h1>For Schleife</h1>
    <?php
        echo "<table cellspacing = '10'>\n";
        for($i =  0 ; $i <= 99 ;$i++) {
            if($i % 10 == 0) {
                echo "\t<tr>\n";
                $spaltenzaehler = 10;
            }
            echo "\t\t<td>$i</td>\n";
            $spaltenzaehler++;

            if($spaltenzaehler == 100){
                echo "\t<tr>\n";
            }
        }
        echo "</table>";
    ?>
</body>
</html>