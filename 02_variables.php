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

$name = 'Jay B'; // String // Can be single or double quotes
$age = 30; // Integer
$hasCar = false; // Boolean
$netWorth = 12000000; //Float

var_dump($netWorth);
echo '<br>';

/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
echo "$name is $age years old";
echo '<br>';

// Better to do this
echo "{$name} is {$age} years old";
echo '<br>';

// Concatenate Strings

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';
echo '<br>';

// Arithmetic Operators

echo 3 + 4;
echo '<br>';

echo 10 - 3;
echo '<br>';

echo 7 * 1;
echo '<br>';

echo 14 / 2;
echo '<br>';

// Constants - Cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);