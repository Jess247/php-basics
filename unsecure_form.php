<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsafe Form</title>
</head>
<body>
<?php
    if(isset($_POST["name"])) {
        echo <<<OUTPUT
        <p>Your entered: </br>
            <ul>
                <li>Name: {$_POST["name"]}</li>
                <li>Email address: {$_POST["email"]}</li>
            </ul></p>
            <p>Your message: </br>
            {$_POST["message"]} </p>
OUTPUT;
    }
?>
    <h1>Contact</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>Please enter you contact details and your message.</p>
        <p>
            <label for="name">Name: </label></br>
            <input type="text" name="name" size="25" required placeholder="Please enter name..." autofocus="autofocus">
        </p>
        <p>
            <label for="email">Email address: </label></br>
            <input type="text" name="email" size="25" required placeholder="Please enter email address..." autofocus="autofocus">
        </p>
        <p>
            <label for="message">Message: </label></br>
            <textarea name="message" required placeholder="Enter your message" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" value="Send">
            <input type="reset">
        </p>

    </form>
</body>
</html>