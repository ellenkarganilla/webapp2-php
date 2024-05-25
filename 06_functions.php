<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
    echo 'User has been registered!';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
    echo "User {$username} has been registered!";
}

echo '<br>';
echo '<br>';

// Pass in an argument
registerUser2('Yugeom');

echo '<br>';
echo '<br>';

// Returning values
function add($num1, $num2)
{
    return $num1 + $num2;
}

$sum = add(4, 3);
echo "Sum: {$sum}";

echo '<br>';
echo '<br>';

// Adding default values
function subtract($num1 = 10, $num2 = 3)
{
    return $num1 - $num2;
}

$difference = subtract();
echo "Difference: {$difference}";

echo '<br>';
echo '<br>';

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
    return $num1 + $num2;
};

$sum = $add(5, 2);
echo "Sum: {$sum}";

echo '<br>';
echo '<br>';

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

$product = $multiply(7, 1);
echo "Product: {$product}";