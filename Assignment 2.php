<?php
$sum = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $sum += $i;
}
echo "The sum of all even numbers between 1 and 100 is: $sum";
?><br>


<?php
$cities = [
    "City1" => 2250000,
    "City2" => 1390000,
    "City3" => 1820000
];

$highestPopulationCity = array_keys($cities, max($cities))[0];
echo "The city with the highest population is: $highestPopulationCity";
?><br>



<?php
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-z0-9]/', '', $string));
    return $string === strrev($string);
}

$testString = "Alexa";
if (isPalindrome($testString)) {
    echo "\"$testString\" is a palindrome.";
} else {
    echo "\"$testString\" is not a palindrome.";
}
?><br>


<!DOCTYPE html>
<html>
<head>
    <title>User Feedback</title>
</head>
<body>
    <form action="display_feedback.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html><br


<!DOCTYPE html>
<html>
<head>
    <title>Feedback Submitted</title>
</head>
<body>
    <h1>Feedback Submitted</h1>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($_POST['mobile']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
</body>
</html>