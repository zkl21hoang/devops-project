<?php
session_start(); // Starts the session
if (!isset($_SESSION["guesses"]) && empty($_SESSION["guesses"])) { // Checks if session variable exists
    $_SESSION["guesses"] = 0; // session variable stores the number time that you have guessed
}
$guesses = $_SESSION["guesses"]; // Assign the session variable "guesses" to a variable

if (!isset($_SESSION["random_number"]) && empty($_SESSION["random_number"])) { // Checks if session variable exists
    $_SESSION["random_number"] = rand(1, 100); // session variable stores a random integer between 1 and 100
}
$random_number = $_SESSION["random_number"]; // Assign the session variable "random_number" to a variable
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Minh Hoang Nguyen</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1>Minh Hoang Nguyen - 103295032</h1>
<form action="guessinggame.php" method="POST">
    <label for="answer">Enter a number between 1 and 100: </label>
    <input type="text" id="answer" name="answer"/>
    <input type="submit" name="submit" value="Guess"/>
</form>
<?php
    function check_inside_range($integer, $min, $max) {
        return ($integer >= $min && $integer <= $max);
    }
    if (isset($_POST["answer"]) && !empty($_POST["answer"])) {
        $answer = $_POST["answer"];
        $guesses++; // Increment the value
        $_SESSION["guesses"] = $guesses; // Update the session variable 
        if(is_numeric($answer)) {
            if (check_inside_range($answer, 1, 100)) {
                if ($answer == $random_number) {
                    echo "<p style='background-color:green;color:white;'>Congratulations | Correct Hidden Number</p>";
                } else if ($answer < $random_number) {
                    echo "<p style='background-color:red;color:white;'>Try again | Hidden number is higher than.</p>";
                } else {
                    echo "<p style='background-color:red;color:white;'>Try again | Hidden number is lower than.</p>";
                }
            } else {
                echo "<p>Please enter an integer between 1 and 100</p>";
            }
        } else {
            echo "<p>Please enter an integer between 1 and 100</p>";
        }
    }
    echo "<p>The random number is: " . $random_number . "</p>";
    echo "<p>Number of time that you have guessed: " . $guesses . "</p>";
?>
<p><a href="giveup.php">Give Up</a></p>
<p><a href=startover.php>Start Over</a></p>
</body>
</html>