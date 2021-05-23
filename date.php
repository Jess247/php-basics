<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
        // current weekday
        function weekday($wday){
            switch($wday){
                case 0:
                    $day = "Sunday";
                    break;
                case 1:
                    $day = "Monday";
                    break;
                case 2:
                    $day = "Tuseday";
                    break;
                case 3:
                    $day = "Wednesday";
                    break;
                case 4:
                    $day = "Thursday";
                    break;
                case 5:
                    $day = "Friday";
                    break;
                case 5:
                    $day = "Saturday";
                    break;
            }
            return $day;
        }
    ?>
    <h1>Today</h1>
    <p>It is the 
        <?php
        // current date
        $timestamp = time();
        $date = date("d.m.Y", $timestamp);
        echo $date;
        ?> 
        and it is currently 
        <?php
        // current time
        $date = date("H:i:s", $timestamp);
        echo $date;
        ?>
        o'clock.
        I have the feeling today will be a beautiful 
        <?php
            $dayIndex = date("w", $timestamp);
            print weekday($dayIndex)
        ?>
        .
    </p>
    
</body>
</html>