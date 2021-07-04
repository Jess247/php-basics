<?php
    $arr = ["Meier, Peter",
           "Schulze, Monika",
           "Schmidt, Urusula",
           "Brosowski, Klaus"];
    
    foreach($arr as $i => $str) {
        $newArr = explode(" ", $str);
        $newArr = array_reverse($newArr);
        $arr[$i] = implode(" ", $newArr);
        echo $arr[$i];
    }
    
?>