<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5, 6, 7];
var_dump($numbers);
echo '<br>';

// Simple array of strings
$colors = ['grey', 'red', 'black', 'white', 'blue', 'yellow', 'green'];
var_dump($colors);
echo '<br>';

// Outputting values from an array
echo $numbers[6];
echo '<br>';

echo $numbers[0] + $numbers[5];
echo '<br>';

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);
echo '<br>';

print_r($numbers);
echo '<br>';

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

echo $colors[2];
echo '<br>';

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['green'];
echo '<br>';

var_dump($hex);
echo '<br>';

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Jay',
  'last_name' => 'B',
  'email' => 'jb@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'Jin',
    'last_name' => 'Young',
    'email' => 'jy@gmail.com',
  ],
  [
    'first_name' => 'Jackson',
    'last_name' => 'Wang',
    'email' => 'jw@gmail.com',
  ],
];

echo '<pre>';
var_dump($people);
echo '</pre>';

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo '<br>';

echo $people[2]['email'];
echo '<br>';

// Encode to JSON
echo '<pre>';
var_dump(json_encode($people));
echo '</pre>';

// Decode from JSON
$jsonobj = '{"first_name":"Jay","last_name": "B","email":"jb@gmail.com"}';
echo '<pre>';
var_dump(json_decode($jsonobj));
echo '</pre>';