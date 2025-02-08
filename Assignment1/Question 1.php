<?php
// a. Concatenation
$str1 = "Good";
$str2 = "Morning";
echo $str1 . " " . $str2 . "<br>";

// b. String Length
echo "Length: " . strlen($str1) . "<br>";

// c. Substring Extraction
echo "Substring: " . substr($str1, 1, 3) . "<br>";

// d. Case Conversions
echo "Uppercase: " . strtoupper($str2) . "<br>";
echo "Lowercase: " . strtolower($str2) . "<br>";
echo "Uppercase First Letter: " . ucfirst($str2) . "<br>";
echo "Uppercase Words: " . ucwords("good morning") . "<br>";

// e. Trimming
$str3 = "  Brewed Coffee  ";
echo "Trimmed: '" . trim($str3) . "'<br>";
echo "Left Trimmed: '" . ltrim($str3) . "'<br>";
echo "Right Trimmed: '" . rtrim($str3) . "'<br>";

// f. Reverse a String
echo "Reversed: " . strrev($str1) . "<br>";

// g. Compare Strings (Case-Sensitive)
echo "Comparison (Case-Sensitive): " . strcmp("Good", "good") . "<br>";

// h. Compare Strings (Case-Insensitive)
echo "Comparison (Case-Insensitive): " . strcasecmp("Good", "good")."<br>";
?>