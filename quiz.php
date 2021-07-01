<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplications</title>
</head>
<body>
<h1>Basic multiplications</h1>
<?php
    echo "<table cellspacing = '10'>\n";
    for($i = 1; $i <= 10; $i++){
        if($i == 1) {
            echo "<tr><th>*</th>";
        }
        echo "<th>$i</th>\t";
        if($i == 10){
            echo "</tr>";   
        }
        echo "<tr><th>$i</th></tr>";
    }
?>
    
</body>
</html>