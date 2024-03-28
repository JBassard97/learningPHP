<!-- Any comments left outside the tags will also be outputted (in the backend) -->

<?php
// PHP: Hypertext Preprocessor
echo "Hello World";
?>


<?php
// Instead of typing php --version, phpversion() returns the version you're using
// echo phpversion();

// ! Variables

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

// ? The above variables are in 'global' scope. Unlike JavaScript, these are NOT usable inside a function

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

// ! Common String methods

// Find the length of a string with strlen()
echo strlen("Hello world!");

// Find the number of words in a string
echo str_word_count("word count");

// Uppercase the entire string
echo strtoupper("uppercase");

// Lowercase the entire string
echo strtolower("LOWERCASE");

// Uppercase the first letter of a string
echo ucfirst("uPPERCASE first letter");

// Uppercase the first letter of every word in a string
echo ucwords("tITLE cASE");

// Concat strings with the . operator
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
// or simply
$z = "$x $y";
echo $z;

// Slice a string from a starting index to a specified length
$x = "Hello World!";
echo substr($x, 6, 5);
// without the end value it'll slice until the end
echo substr($x, 6);

// To insert characters that are illegal in a string, use an escape character.
$x = "We are the so-called \"Vikings\" from the north.";

// ! Common Number Methods

// Returns the value of PI
echo (PI());

// Find the lowest or highest value in a list of arguments:
echo (min(0, 150, 30, 20, -8, -200));
echo (max(0, 150, 30, 20, -8, -200));

// Returns the absolute (positive) value of a number
echo (abs(-6.7));

// Returns the square root of a number:
echo (sqrt(64));

// Rounds a floating-point number to its nearest integer:
// ? 0.4 to the floor, 0.5 to the sky
echo (round(0.60));
echo (round(0.49));

// Generates a random number:
echo (rand());
// or control it by specifying lowest and highest integers:
echo (rand(10, 100));

// ! Constants (important)
// define(name, value, case-insensitive);
// ? A constant does not start with $, and unlike variables is available EVERYWHERE
// ? Default for 'case-insensitive' arg is false, but can be specified as true

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// ? OR use const keyword:
const MYCAR = "Volvo";
echo MYCAR;

// ? define() is better than const, as it has a case-insensitive opeion and can be used in any scope freely

// ! Magic Constants (that's their name lol)
// __CLASS__	If used inside a class, the class name is returned.	
// __DIR__	The directory of the file.	
// __FILE__	The file name including the full path.	
// __FUNCTION__	If inside a function, the function name is returned.	
// __LINE__	The current line number.	
// __METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
// __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
// __TRAIT__	If used inside a trait, the trait name is returned.

// ! Operators
// Consistent with other languages, except we have spaceship operator <=>

$x = 5;
$y = 10;
echo ($x <=> $y); //returns -1 since x is less than y
$x = 10;
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
$x = 15;
$y = 10;
echo ($x <=> $y); // returns 1 because $x is greater than $y

// ? PHP also offers <> as 'loose not equal' as well as !=
?>