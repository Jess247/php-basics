<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Selection</title>
</head>
<body>
    <form action="post">
        <p>
            <select name="one-option" id="dynamic">
                <option value="Bread">Bread</option>
                <option value="Butter">Butter</option>
                <option value="Milk">Milk</option>
                <option value="Eggs">Eggs</option>
                <option value="Cheese">Cheese</option>
                <option value="Peperoni">Peperoni</option>
            </select>
        </p>

        <p>
            <select name="multi-options" id="dynamicMulti" size="6" multiple>
                <option value="Screws">Screws</option>
                <option value="Nails">Nails</option>
                <option value="Hammer">Hammer</option>
                <option value="Screwdriver">Screwdriver</option>
                <option value="Wood">Wooden plank</option>
                <option value="Tarp">Tarp</option>
            </select>
        </p>
        <p>
            <input type="submit" value="send">
        </p>
    </form>
</body>
</html>