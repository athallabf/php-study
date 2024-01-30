<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$ngops = true;
$name = 'abf';
// echo $name . ' = ' . $ngops;
// echo "${name} adalah ${ngops}"; // decprecated
// echo "$name adalah \$ $ngops";
// echo '5' + '5';
// var_dump('5' / '5');

// constants
define('HOST','localhost');
define('PORT',3000);
// echo "$HOST:$PORT"; // error
echo HOST.':'.PORT;
?>