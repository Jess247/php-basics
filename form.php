<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Let's do some simple addition!</h1>
    <!-- we are using a different file for the php -->
    <form action="add_nums_form.php" method="post">
        <p>
        <label for="num1">Fist number: </label>
            <input type="text" name="num1" placeholder="Enter number please..." required autofocus >
        </p>
        <p>
            <label for="num2">Fist number: </label>
            <input type="text" name="num2" placeholder="Enter number please..." required >
        </p>
        <input type="submit" value="Calculate">
        <input type="reset" value="Reset">
    </form>
</body>
</html>