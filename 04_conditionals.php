<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

// $age = 20;

// if ($age >= 18) {
//     echo 'You are old enough to vote!';
// } else {
//     echo 'Sorry, you are too young to vote.';
// }
// echo '<br>';
// echo '<br>';

$score = 95;

if ($score >= 75) {
    echo 'Congratulations! You passed the test.';
} else {
    echo 'Unfortunately, you did not pass the test.';
}
echo '<br>';
echo '<br>';


// Dates
// The following characters can be used along with the date() function to format the time string:
// h: Represents hour in 12-hour format with leading zeros (01 to 12).
// H: Represents hour in 24-hour format with leading zeros (00 to 23).
// i: Represents minutes with leading zeros (00 to 59).
// s: Represents seconds with leading zeros (00 to 59).
// a: Represents lowercase antemeridian and post meridian (am or pm).
// A: Represents uppercase antemeridian and post meridian (AM or PM).

echo date("h:i:s") . "\n";
echo '<br>';
echo '<br>';

echo date("M d, Y h:i:s A") . "\n";
echo '<br>';
echo '<br>';

echo date("h:i a");
echo '<br>';
echo '<br>';

$t = date('H');

if ($t < 12) {
    echo 'Have a good morning!';
} elseif ($t < 17) {
    echo 'Have a good afternoon!';
} else {
    echo 'Have a good evening!';
}
echo '<br>';
echo '<br>';

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. 
//The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
    echo $posts[0];
} else {
    echo 'There are no posts';
}
echo '<br>';
echo '<br>';

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';
echo '<br>';
echo '<br>';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);
echo '<br>';
echo '<br>';

/* -------- Switch Statements ------- */

$favcolor = 'black';

switch ($favcolor) {
    case 'black':
        echo 'Your favorite color is black!';
        break;
    case 'brown':
        echo 'Your favorite color is brown!';
        break;
    case 'gray':
        echo 'Your favorite color is gray!';
        break;
    default:
        echo 'Your favorite color is not black, brown, nor gray!';
}