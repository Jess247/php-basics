<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h1>These are the current dates</h1>
    <p>It is the 
        <?php
        // current date
        $timestamp = time();
        $date = date("d.m.Y", $timestamp);
        echo $date;
        ?>
    </p>
    
</body>
</html>