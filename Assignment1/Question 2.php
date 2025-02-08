<?php
// a. Arithmetic Operations
$num1 = 8;
$num2 = 5;
echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br>";

// b. Round Up
echo "Round Up: " . ceil(6.1) . "<br>";

// c. Round Down
echo "Round Down: " . floor(2.9) . "<br>";

// d. Square Root
echo "Square Root: " . sqrt(49) . "<br>";

// e. Random Number
$min = 1;
$max = 100;
echo "Random Number: " . rand($min, $max) . "<br>";

// f. Check if Numeric
$value = "568";
echo "Is Numeric: " . (is_numeric($value) ? "Yes" : "No")."<br>";
?>