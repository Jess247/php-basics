<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    .sign {
        width:250px;
        border-top: 3px dashed black;
        font-size: 12pt;
    }
    </style>
    <?php
        // declaring the function
        // Function without parameters
        function signature() {
            $name = "Jessica Smith";
            $street = "William street 23";
            $zipCode = "28199";
            $city = "Bremen";
            echo "<div class='sign'>\n";
            echo "<p>$name<br/>\n";
            echo "$street <br/>\n";
            echo "$zipCode $city</p>\n";
            echo "</div>\n";
        }
        // the inner function call needs to be after the outer one and after the inner() deceleration
        function outer() {
            echo "I am the outer part of the function! <br/>";
            function inner() {
                echo "I am the inner part of the function. I can only be called if outer is called as well! <br/>";
            }
        }

    ?>
</head>
<body>
    <h1>Functions</h1>
    <?php
    // calling the function
    signature();

    // nested function
    outer();
    inner();
    
    // conditional function 
    // function call will only work if the condition is true otherwise error
    $num = 15;

    if($num > 10){
        // $squareNum is a parameter of the function
        function square($squareNum) {
            echo "The square of $squareNum equals: ".($squareNum * $squareNum). ".\n";
        }
    }

    square($num);

    ?>
</body>
</html>