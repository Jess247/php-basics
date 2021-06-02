<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="extcss.css">
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

    echo <<<TEXT
        <h1 class="blueGreen">Überschrift 1</h1>
        <p class="blackYellow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <table class="whiteRed">
            <tr>
                <th>Spalte 1</th>
                <th>Spalte 2</th>
            </tr>
            <tr>
                <td>Zelle</td>
                <td>Zelle</td>
            </tr>
        </table>
TEXT;
?>


    
</body>
</html>