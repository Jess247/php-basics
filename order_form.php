<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['starter'])) {
    $starter = $_POST['starter'];
    $mainDish = $_POST['main'];
    $dessert = $_POST['dessert'];
    $drinks = $_POST['drinks'];
    $guestStatus = $_POST['guestStatus'];
} else {
    $starter = "";
    $mainDish = "";
    $dessert = "";
    $drinks = "";
    $guestStatus = "";
}
?>
    <h1>Menu</h1>
    <h2>Place your order</h2>
    <form action="" method="post">
        <label for="starter">Starter: </label>
        <select id="starter" name="starter">
            <option value="">Choose a starter</option>
            <option value="salat"<?php if($starter == 'salat'){echo 'selected';}?>>Salad</option>
            <option value="garlicBread"<?php if($starter == 'garlicBread'){echo 'selected';}?>>Garlic Bread</option>
            <option value="bruschetta"<?php if($starter == 'bruschetta'){echo 'selected';}?>>Bruschetta</option>
            <option value="antipasti"<?php if($starter == 'antipasti'){echo 'selected';}?>>Antipasti</option>
        </select>
</br>
        <label for="main">Main Dish</label>
        <select id="main" name="main">
            <option value="">Choose a dish</option>
            <option value="pizza"<?php if($mainDish == 'pizza'){echo 'selected';}?>>Pizza</option>
            <option value="pasta"<?php if($mainDish == 'pasta'){echo 'selected';}?>>Pasta</option>
            <option value="lasagne"<?php if($mainDish == 'lasagne'){echo 'selected';}?>>Lasagne</option>
            <option value="calzone"<?php if($mainDish == 'calzone'){echo 'selected';}?>>Calzone</option>
        </select>
</br>
        <label for="dessert">Dessert</label>
        <select id="dessert" name="dessert">
            <option value="">Choose a dessert</option>
            <option value="tiramisu"<?php if($dessert == 'tiramisu'){echo 'selected';}?>>Tiramisu</option>
            <option value="mousse"<?php if($dessert == 'mousse'){echo 'selected';}?>>Mousse Au Chocolat</option>
            <option value="iceCream"<?php if($dessert == 'iceCream'){echo 'selected';}?>>Ice Cream</option>
            <option value="none"<?php if($dessert == 'none'){echo 'selected';}?>>none</option>
        </select>
</br>
        <label for="drinks">Drinks</label>
        <select id="drinks" name="drinks">
            <option value="">Choose a dessert</option>
            <option value="water"<?php if($drinks == 'water'){echo 'selected';}?>>Water</option>
            <option value="wine"<?php if($drinks == 'wine'){echo 'selected';}?>>Wine</option>
            <option value="beer"<?php if($drinks == 'beer'){echo 'selected';}?>>Beer</option>
            <option value="none"<?php if($drinks == 'none'){echo 'selected';}?>>none</option>
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
            }?>/>
        </label>
        </br>
        <button type="submit">Order</button>
    </form>
</body>
</html>