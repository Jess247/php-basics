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
    $desert = $_POST['dessert'];
    $drink = $_POST['drinks'];
    $guestStatus = $_POST['guestStatus'];
} else {
    $starter = "";
    $mainDish = "";
    $desert = "";
    $drink = "";
    $guestStatus = "";
}
?>
    <h1>Menu</h1>
    <h2>Place your order</h2>
    <form action="" method="post">
        <label for="starter">Starter: </label>
        <select id="starter" name="stater">
            <option value="">Choose a starter</option>
            <option value="<?php if($starter == 'salat')?>{echo 'selected'}">Salad</option>
            <option value="<?php if($starter == 'garlicBread')?>{echo 'selected'}">Garlic Bread</option>
            <option value="<?php if($starter == 'bruschetta')?>{echo 'selected'}">Bruschetta</option>
            <option value="<?php if($starter == 'antipasti')?>{echo 'selected'}">Antipasti</option>
        </select>
</br>
        <label for="main">Main Dish</label>
        <select id="main" name="main">
            <option value="">Choose a dish</option>
            <option value="<?php if($mainDish == 'pizza')?>{echo 'selected'}">Pizza</option>
            <option value="<?php if($mainDish == 'pasta')?>{echo 'selected'}">Pasta</option>
            <option value="<?php if($mainDish == 'lasagne')?>{echo 'selected'}">Lasagne</option>
            <option value="<?php if($mainDish == 'calzone')?>{echo 'selected'}">Calzone</option>
        </select>
</br>
        <label for="dessert">Dessert</label>
        <select id="dessert" name="dessert">
            <option value="">Choose a dessert</option>
            <option value="<?php if($dessert == 'tiramisu')?>{echo 'selected'}">Tiramisu</option>
            <option value="<?php if($dessert == 'mousse')?>{echo 'selected'}">Mousse Au Chocolat</option>
            <option value="<?php if($dessert == 'iceCream')?>{echo 'selected'}">Ice Cream</option>
            <option value="<?php if($dessert == 'none')?>{echo 'selected'}">none</option>
        </select>
</br>
        <label for="drinks">Drinks</label>
        <select id="drinks" name="drinks">
            <option value="">Choose a dessert</option>
            <option value="<?php if($drinks == 'water')?>{echo 'selected'}">Water</option>
            <option value="<?php if($drinks == 'wine')?>{echo 'selected'}">Wine</option>
            <option value="<?php if($drinks == 'beer')?>{echo 'selected'}">Beer</option>
            <option value="<?php if($drinks == 'none')?>{echo 'selected'}">none</option>
        </select>
</br>
        <label for="employee">employee
            <input type="radio" name="guestStatus" id="employee" value="employee"<?php 
            if($guestStatus != "guest") {
                echo "checked";
            }?>/>
        </label>
        </br>
        <label for="costumer">Costumer
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