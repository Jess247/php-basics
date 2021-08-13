<?php
// to check if a class exists 
if(class_exists('Carclass')){
    $volkswagen = new Carclass();
}
// -----------------------------------------------------------


// to create an alisa for a class 
// this creates a alias of a class with a different class name
if(!class_exists('ShortName')) {
    class_alias('LongComplicatedClassName', 'ShortName');
}
// both work just the same
$long = new LongComplicatedClassName();
$short = new ShortName();
// -----------------------------------------------------------


// to get the names of the methods of a class in from of an array
$tesla = new SportsCar(250, 301, false, true);
$methods = get_class_methods("SportsCar");
// or can be written like the following alternatively
// $methods = get_class_methods($tesla)
echo "<br/>";
foreach ($methods as $name) {
    echo "$name<br/>"; // sample just for demonstration classes aren't included
}
// it will output the methods of the class and the parent class 
// -----------------------------------------------------------

// get public variables 
$tesla = new SportsCar(250, 301, false, true);
$attributes = get_class_vars("SportsCar");
print_r($attributes);
// outputs ONLY public attributes

// -----------------------------------------------------------

// get all declared classes in an array
$audi = new SportsCa(250, 301, false, true);
$jeep = new FourWheelDrive(75);
$trailer = new Trailer();

print_r(get_declared_classes());
// outputs not just the three classes we created but all the automatically declared classes 

// -----------------------------------------------------------

// get the parent class of an object

$audi = new SportsCa(250, 301, false, true);
echo get_parent_class($audi);

// output would be Carclass

?>