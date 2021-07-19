<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <label for="starter">Starter: </label>
        <select id="starter" name="stater">
            <option value="">Choose a starter</option>
            <option value="salad">Salad</option>
            <option value="garlicBread">Garlic Bread</option>
            <option value="bruschetta">Bruschetta</option>
            <option value="antipasti">Antipasti</option>
        </select>
</br>
        <label for="main">Main Dish</label>
        <select id="main" name="main">
            <option value="">Choose a dish</option>
            <option value="pizza">Pizza</option>
            <option value="pasta">Pasta</option>
            <option value="lasagne">Lasagne</option>
            <option value="calzone">Calzone</option>
        </select>
</br>
        <label for="dessert">Dessert</label>
        <select id="dessert" name="dessert">
            <option value="">Choose a dessert</option>
            <option value="tiramisu">Tiramisu</option>
            <option value="mouseAuChocolat">Mousse Au Chocolat</option>
            <option value="iceCream">Ice Cream</option>
            <option value="calzone">none</option>
        </select>
</br>
        <label for="drinks">Drinks</label>
        <select id="drinks" name="drinks">
            <option value="">Choose a dessert</option>
            <option value="water">Water</option>
            <option value="wine">Wine</option>
            <option value="coke">Coke</option>
            <option value="calzone">none</option>
        </select>
</br>
        <label for="employee">employee
            <input type="radio" name="guestStatus" id="employee">
        </label>
        </br>
        <label for="costumer">Costumer
            <input type="radio" name="guestStatus" id="costumer">
        </label>
        </br>
        <button type="submit">Order</button>
    </form>
</body>
</html>