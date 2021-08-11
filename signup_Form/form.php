<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>

    <?php
        if(isset($_POST["color_picker"])) {
            echo $_POST["color_picker"];
        }
    ?>
</head>
<body>
    <div class="container">
        <h1>Sign up now...</h1>
        <hr>
        <form action="" method="post">
            <div class="textfield_container">
                <p class="textfields">
                    <label for="fname">First name: </label><br/>
                    <input type="text" name="fname" id="fname" placeholder="Please enter your first name..." require>
                </p>
                <p class="textfields">
                    <label for="surname"> Surname: </label><br/>
                    <input type="text" name="surname" id="surname" placeholder="Please enter your surname..." require>
                </p>
                <p class="textfields">
                    <label for="email"> Email address: </label><br/>
                    <input type="email" name="email" id="email" placeholder="Please enter your email..." require>
                </p>
                <p class="textfields">
                    <label for="bio"> Bio: </label><br/>
                    <textarea name="bio" id="bio" cols="30"  placeholder="Share something about yourself..."></textarea>
                </p>
            </div>
            <h3>Hobbies</h3>
            <hr>
            <div class="checkboxes">
                <p>
                    <label for="hobby">Swimming: </label>
                    <input type="checkbox" name="hobbyGr" id="swimming">
                </p>
                <p>
                    <label for="cycling">Cycling: </label>
                    <input type="checkbox" name="hobbyGr" id="cycling">
                </p>
                <p>
                    <label for="singing">Singing: </label>
                    <input type="checkbox" name="hobbyGr" id="singing">
                </p>
                <p>
                    <label for="gaming">Gaming: </label>
                    <input type="checkbox" name="hobbyGr" id="gaming">
                </p>
                <p>
                    <label for="skating">Skating: </label>
                    <input type="checkbox" name="hobbyGr" id="skating">
                </p>
                <p>
                    <label for="drawing">Drawing: </label>
                    <input type="checkbox" name="hobbyGr" id="drawing">
                </p>
                <p>
                    <label for="soccer">Soccer: </label>
                    <input type="checkbox" name="hobbyGr" id="soccer">
                </p>
                <p>
                    <label for="reading">Reading: </label>
                    <input type="checkbox" name="hobbyGr" id="reading">
                </p>
                <p>
                    <label for="gardening">Gardening: </label>
                    <input type="checkbox" name="hobbyGr" id="gardening">
                </p>
                <p>
                    <label for="hiking">Hiking: </label>
                    <input type="checkbox" name="hobbyGr" id="hiking">
                </p>

            </div>
            <h3>Skills</h3>
            <hr>
            <div class="checkboxes">
                <p>
                    <label for="programming">programming: </label>
                    <input type="checkbox" name="skillGr" id="programming">
                </p>
                <p>
                    <label for="design">UI/UX Design: </label>
                    <input type="checkbox" name="skillGr" id="design">
                </p>
                <p>
                    <label for="marketing">marketing: </label>
                    <input type="checkbox" name="skillGr" id="marketing">
                </p>
                <p>
                    <label for="fashion">Fashion Design: </label>
                    <input type="checkbox" name="skillGr" id="fashion">
                </p>
                <p>
                    <label for="art">Creative Art: </label>
                    <input type="checkbox" name="skillGr" id="art">
                </p>
                <p>
                    <label for="planting">Planting: </label>
                    <input type="checkbox" name="skillGr" id="planting">
                </p>
                <p>
                    <label for="writing">Writing: </label>
                    <input type="checkbox" name="skillGr" id="writing">
                </p>
                <p>
                    <label for="automotive">Automotive Knowledge: </label>
                    <input type="checkbox" name="skillGr" id="automotive">
                </p>
                <p>
                    <label for="woodworking">Woodworking: </label>
                    <input type="checkbox" name="skillGr" id="woodworking">
                </p>
                <p>
                    <label for="topography">Topography and card reading: </label>
                    <input type="checkbox" name="skillGr" id="topography">
                </p>
            </div>
            <div class="upload textfields textfield_container">
                <p>
                    <label for="file_input">Upload Profile Picture: </label>
                    <input type="file" id="file_input" name="file_input">
                </p>
            </div>
            <div class="theme textfield_container">
                <p>
                    <label for="color_picker">Chose a color theme: </label>
                    <input type="color" name="color_picker" id="color_picker">
                </p>
            </div>
            <input type="submit" value="Create Profil" id="submitBtn">
        </form>
    </div>
</body>
</html>