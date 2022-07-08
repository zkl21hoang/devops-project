<?php
    session_start(); // Starts the session
    $random_number = $_SESSION["random_number"]; // Assign the value to a variable
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
<?php
    echo "<p>The hidden number was: " . $random_number . "<p>";
?>
<p><a href=startover.php>Start Over</a></p>
</body>
</html>
