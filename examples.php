<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einsendeaufgabe</title>
</head>
<body>
<?php 

    // Write a text with a h1 tag and multiple lines of paragraphs 
    echo 
   "<h1>Alles mit Echo</h1>\n
    <p>Diese HTML-Datei wurde mit einem einzigen echo-Befehl generiert.</p>";

    $eingSek = 1000000;
    $restSek = $eingSek % 60;
    $min = $eingSek / 60;
    $hour = ($min / 60) % $min;
    $min = $min % 60;

    echo "<h1>Zeitumrechnung mit Modulo</h1>\n";
    echo "<p>Eingegegebene Sekunden: $eingSek <br/>
        Umgerechnet: $hour Stunden, $min Minuten, $restSek Sekunden</p>";
?>


    
</body>
</html>