<?php
    session_start(); // Starts the session
    $_SESSION = array(); // Unsets all session variables
    session_destroy(); // Clears all data associated with the session
    header("location:guessinggame.php"); // Redirects to guessinggame.php
?>
