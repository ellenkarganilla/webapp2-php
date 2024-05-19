<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
echo 'Come and get it, GOT7!';
echo '<br>';
echo 1234567;
echo '<br>';
echo '<h1>Ahnnyeong</h1>';

// print - Similar to echo, but a bit slower
print 'Annyeonghaseyo';
echo '<br>';

// print_r - Gives a bit more info. Can be used to print arrays
print_r('Jaljinaesseoyo');
echo '<br>';
print_r([1, 2, 3, 4, 5, 6, 7]);
echo '<br>';

// var_dump - Even more info like data type and length
var_dump('Annyeongghasimnikka');
echo '<br>';
var_dump([1, 2, 3, 4, 5, 6, 7]);
echo '<br>';

// Escaping characters with a backslash
echo "fandom name D\'Ahgase";
echo '<br>';

/* ------------ Comments ------------ */

// This is a single line comment

/*
 * This is a multi-line comment
 *
 * It can be used to comment out a block of code
 */

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
</head>

<body>
    <!-- You can output PHP including variables, etc -->
    <h1>Hello <?php echo 'Got7'; ?></h1>
    <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
    <h1>Hello <?= 'Ahgase' ?></h1>
</body>

</html>