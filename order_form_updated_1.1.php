<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form 1.1</title>
    <?php
    // set the html options items with the value of the chosen dish
    function setOption($course, $value, $text){
        $output = "<option value='{$value}'";
        if(isset($_POST["starter"])) {
            if(isset($_POST[$course])){
                $output .= " selected";
            }
        }
        // is there is no text set the text to value
        if(empty($text)) {
            $text = $value;
        }
        $output .= ">$text</option>\n";
        echo $output;
    }
    ?>
</head>
<body>
<?php

    if (isset($_POST["starter"])) {
        $gueststatus = $_POST["gueststatus"];
    }
    else {
        $gueststatus = "";
    }
    ?>

        <h1>Menu</h1>
        <h2>Place your order</h2>
        <form action="" method="post">
            <label for="starter">Starter: </label>
            <select id="starter" name="starter">
                <?php
                setOption("starter","salad","Salad");
                setOption("starter","garlicbread","Garlic Bread");
                setOption("starter","Olives","");
                setOption("starter","Antipasti","");
                ?>
            </select>
    </br>
            <label for="main">Main Dish</label>
            <select id="main" name="main">
                <?php
                setOption("main","Pizza","");
                setOption("main","Pasta","");
                setOption("main","Risotto","");
                setOption("main","Calzone","");
                ?>
            </select>
    </br>
            <label for="dessert">Dessert</label>
            <select id="dessert" name="dessert">
                <?php
                setOption("dessert","Cake","");
                setOption("dessert","fruits","Fruits with Ice Cream");
                setOption("dessert","mousse","Mousse au chocolat");
                setOption("dessert","none","none");
                ?>
            </select>
    </br>
            <label for="drinks">Drinks</label>
            <select id="drinks" name="drinks">
                <?php
                setOption("drinks","Water","");
                setOption("drinks","Beer","");
                setOption("drinks","Wine","");
                setOption("drinks","Fanta","");
                ?>
            </select>
    </br>
            <label for="employee">employee
                <input type="radio" name="guestStatus" id="employee" value="employee"<?php 
                if($guestStatus != "guest") {
                    echo "checked";
                }?>/>
            </label>
            </br>
            <label for="guest">Costumer
                <input type="radio" name="guestStatus" id="guest" value="guest"<?php 
                if($guestStatus == "guest") {
                    echo "checked";
                }
                ?>/>
                </label>
        </br>
        <button type="submit">Order</button>
    </form>
    
</body>
</html>