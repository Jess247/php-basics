<?php
echo 
'<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Das kleine 1 mal 1</h1>
        <table cellpadding="10">
            <thead>
                <tr>';

                $num = 1;
                for($i = 1; $i <= 10; $i++){
                    if($i == 1){
                        echo "<th>*</th>";                    
                    }
                    echo "<th>$num</th>";
                    $num++;
                }
                
    echo       '</tr>
            </thead>
            <tbody>
                <tr>';
                $num = 1;
                for($i = 1; $i <= 10; $i++){
                    if($i < 1){
                        echo "<th>$num</th>";
                    } else {
                        echo "<tr><th>$num</th></tr>";
                    }
                
                    $num++;
                }

                '</tr>
            </tbody>
        </table>
        
    </body>
    </html>';
?>