<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$got7 = ['JayB', 'Jinyoung', 'Jackson', 'Youngjae', 'Yugeom', 'Mark', 'Bambam'];

echo '<pre>';
var_dump($got7);
echo '</pre>';

// Get array length
echo count($got7);

echo '<br>';
echo '<br>';

// Search array
echo in_array('Bambam', $got7);
echo '<br>';
echo '<br>';

var_dump(in_array('Yugeom', $got7));

echo '<br>';
echo '<br>';

// Add to an array
$got7[] = 'Bambam';
array_push($got7, 'Xiumin', 'Chen');

echo '<pre>';
var_dump($got7);
echo '</pre>';

array_unshift($got7, 'Kris'); // Adds to the beginning

echo '<pre>';
var_dump($got7);
echo '</pre>';

// Remove from array
array_pop($got7); // Removes last

echo '<pre>';
var_dump($got7);
echo '</pre>';

array_shift($got7); // Removes first

echo '<pre>';
var_dump($got7);
echo '</pre>';

// Remove specific element
unset($got7[2]);

echo '<pre>';
var_dump($got7);
echo '</pre>';

// Split into chunks of 2
$chunkedArray = array_chunk($got7, 2);

echo '<pre>';
var_dump($chunkedArray);
echo '</pre>';

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

echo '<pre>';
var_dump($arr3);
echo '</pre>';

$arr4 = [...$arr1, ...$arr2]; // Use Spread

echo '<pre>';
var_dump($arr4);
echo '</pre>';



// Combine arrays (Keys & values)
$a = ['leader', 'rapper', 'sub rapper'];
$b = ['JayB', 'Mark', 'Bambam'];
$c = array_combine($a, $b);

echo '<pre>';
var_dump($c);
echo '</pre>';

// Array of keys
$keys = array_keys($c);

echo '<pre>';
var_dump($keys);
echo '</pre>';

// Flip keys with values
$flipped = array_flip($c);

echo '<pre>';
var_dump($flipped);
echo '</pre>';

// Create array of numbers with range()
$numbers = range(1, 12);

echo '<pre>';
var_dump($numbers);
echo '</pre>';

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
    return "Number {$number}";
}, $numbers);

echo '<pre>';
var_dump($newNumbers);
echo '</pre>';

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 7);

echo '<pre>';
var_dump($lessThan10);
echo '</pre>';

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);