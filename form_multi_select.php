<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Select</title>
</head>
<body>
    <?php
    if(!empty($_POST)){
        print_r($_POST);
    } else {
    ?>
    <form method="post">
        <p>
        <label for="multiSelect">Select an Option (multiple options possible): </label>
        <br>
        <select name="options[]" id="multiSelect" size="10" multiple>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
            <option value="6">Option 6</option>
            <option value="7">Option 7</option>
            <option value="8">Option 8</option>
            <option value="9">Option 9</option>
            <option value="10">Option 10</option>
        </select>
        </p>
        <button type="submit" value="send">Send</button>
    </form>
    <?php
    }
    ?>
</body>
</html>