<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <?php
        if(!empty($_POST)) {
            print_r($_POST);
        }else {
        ?>
        <form method="post">
            <ul>
            <!-- default behaviour -  only the last item out of a group of checkboxes is stored -->
                <li>
                    <input type="checkbox" id="cb1" name="cBoxGroup" value="checkbox 1"/>
                    <label for="cb1">Checkbox number 1</label>
                </li>
                <li>
                    <input type="checkbox" id="cb2" name="cBoxGroup" value="checkbox 2"/>
                    <label for="cb2">Checkbox number 2</label>
                </li>
                <li>
                    <input type="checkbox" id="cb3" name="cBoxGroup" value="checkbox 3"/>
                    <label for="cb3">Checkbox number 3</label>
                </li>
                <li>
                    <input type="checkbox" id="cb4" name="cBoxGroup" value="checkbox 4"/>
                    <label for="cb4">Checkbox number 4</label>
                </li>
                <li>
                    <input type="checkbox" id="cb5" name="cBoxGroup" value="checkbox 5"/>
                    <label for="cb5">Checkbox number 5</label>
                </li>
                <!-- group two values of group items are stored in array-->
                <li>
                    <input type="checkbox" id="cb1" name="cBoxGroupTwo[]" value="checkbox 1"/>
                    <label for="cb1">Checkbox number 1 group items stored in array</label>
                </li>
                <li>
                    <input type="checkbox" id="cb2" name="cBoxGroupTwo[]" value="checkbox 2"/>
                    <label for="cb2">Checkbox number 2 group items stored in array</label>
                </li>
                <li>
                    <input type="checkbox" id="cb3" name="cBoxGroupTwo[]" value="checkbox 3"/>
                    <label for="cb3">Checkbox number 3 group items stored in array</label>
                </li>
                <li>
                    <input type="checkbox" id="cb4" name="cBoxGroupTwo[]" value="checkbox 4"/>
                    <label for="cb4">Checkbox number 4 group items stored in array</label>
                </li>
                <li>
                    <input type="checkbox" id="cb5" name="cBoxGroupTwo[]" value="checkbox 5"/>
                    <label for="cb5">Checkbox number 5 group items stored in array</label>
                </li>
            </ul>
            <button type="submit" value="send">Send</button>

        <?php
        }
        ?>

    
</body>
</html>