<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Selection</title>

    <?php
        function dynAuswahl($id, $name, $options, $multiple){
            $ausgabe = "<select id='$id' name='$name'";
            if($multiple){
                $ausgabe .= "size =".count($options)." multiple>\n";
            } else {
                $ausgabe .= ">\n";
            }
            for($i = 0; $i < count($options); $i++){
                $ausgabe .= "\t<option value='$options[$i]'>$options[$i]</option>\n";
            }
            if(isset($_POST["id"])){
                if($_POST["options[$i]"]){
                    $ausgabe .= "selected";
                }
            }
            $ausgabe .= "</select>";
            echo $ausgabe;
        }
    ?>
</head>
<body>
    <form action="post">
        <p>
        <?php dynAuswahl("dynamisch1", "auswahl1", array("brot", "butter", "Kaese", "wurst"), false) ?>
        </p>

        <p>
        <?php dynAuswahl("dynamisch2", "auswahl2", array("fish", "haenchen", "rind", "schwein"), true) ?>
        </p>
        <p>
            <input type="submit" value="send">
        </p>
    </form>
</body>
</html>