
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplications</title>
</head>
<body>
<h1>Das kleine 1 mal 1</h1>
<table cellspacing ="10">
    <thead>
        <tr>
            <?php
                for($i = 1; $i <= 10; $i++){
                    if($i == 1){
                      echo "<th>*</th>";
                    }
                    echo "<th>$i</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
            <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "<tr><th>$i</th>";
                        for($j = 1; $j <= 10; $j++){
                            $sum = $j*$i;
                            echo "<td>$sum</td>";
                        }
                        echo "</tr>\n";
                    }
            ?>
    </tbody>
</table>    
</body>
</html>
