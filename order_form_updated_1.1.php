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

    function order() {
        if($_POST["starter"] == ""
        && $_POST["main"] == ""
        && $_POST["dessert"] == ""
        && $_POST["drinks"] == ""){
            echo "<p>It looks like you didn't make a choice yet...</p>\n";
        }else {
            echo "<h3>Thanks for your order.</h3>\n";
            echo "<p>You ordered: </p>\n";
            echo "<ul>\n";
            if($_POST["starter"] != ""){
                echo "<li>Starter: {$_POST['starter']} </li>\n";
            }
            if($_POST["main"] != ""){
                echo "<li>Main course: {$_POST['main']} </li>\n";
            }
            if($_POST["dessert"] != ""){
                echo "<li>Dessert: {$_POST['dessert']} </li>\n";
            }
            if($_POST["drinks"] != ""){
                echo "<li>Drinks: {$_POST['drinks']} </li>\n";
            }
            echo "</ul>\n";
        }
    }
    ?>
</head>
<body>
<?php

    if (isset($_POST["starter"])) {
        $gueststatus = $_POST["gueststatus"];
        order();
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
                setOption("starter","","none");
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
                setOption("main","","none");
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
                setOption("dessert","","none");
                setOption("dessert","Cake","");
                setOption("dessert","fruits","Fruits with Ice Cream");
                setOption("dessert","mousse","Mousse au chocolat");
                ?>
            </select>
    </br>
            <label for="drinks">Drinks</label>
            <select id="drinks" name="drinks">
                <?php
                setOption("drinks","","none");
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