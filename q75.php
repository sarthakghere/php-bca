<?php
// Start the session
session_start();

// Store a session variable
$_SESSION["username"] = "JohnDoe";

// Access and display the session variable
echo "Session variable 'username' is set to: " . $_SESSION["username"];

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
