<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>Forms</h1>
    <P>Please enter a number in each textfield.</P>
    <form action="add_nums_form.php" method="post">
        <p>
            <label for="numOne">Fist number: </label>
            <input type="text" name="numOne" placeholder="Enter number..." required autofocus>
        </p>
        <p>
            <label for="numTwo">Second number: </label>
            <input type="text" name="numTwo" placeholder="Enter number..." required>
        </p>
        <button type="submit" value="add">Calculate</button>
        <button type="reset" value="add">Reset</button>
    </form>
</body>
</html>