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

    echo "Die gezogenen Zahlen sind: ";
    $gezogen = 0;
    $lottozahen = [];
        while($gezogen < 6) {
            $lottozahen[] = mt_rand(1,49);
            echo $lottozahen.", ";
            //shuffle numbers
            echo $lottozahen.", ";
            $gezogen++;
        }
        if(shuffle($lottozahen)) {
                echo "$lottozahen";
        }
        
    ?>
</body>
</html>