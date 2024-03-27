<!-- Any comments left outside the tags will also be outputted (in the backend) -->

<?php
// PHP: Hypertext Preprocessor
echo "Hello World";
?>


<?php
// Instead of typing php --version, phpversion() returns the version you're using
// echo phpversion();

//  Declare variables starting with $
//  Every line ends with ;
$txt = "PHP";
echo "$txt is pretty neat";

// Using a multi-line comment, you can comment out the middle of a code line
$x = 5 /* + 15 */ + 5;
echo $x;

// To get the Data Type of a variable, use the var_dump() function
$x = 5;
var_dump($x);

// var_dump() can be used on an array to return its length, and the data type and index of each element
var_dump([1, "two", null, true]);

// You can assign the same value to multiple variables
$x = $y = $z = "Fruit";

// ! The above variables are in 'global' scope. Unlike JavaScript, these are NOT usable inside a function

// Variables declared inside a function have 'local' scope, and are ONLY usable inside that function

// The 'global' keyword makes global variables accessible inside a function
$x = 20;
$y = 400;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y;

// PHP stores global variables in an array $GLOBALS[`variable`] which is accessible anywhere
$x = 5;
$y = 10;

function myGlobalsTest()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myGlobalsTest();
echo $y; // outputs 15

// Find the length of a string with strlen()
echo strlen("Hello world!");

?>