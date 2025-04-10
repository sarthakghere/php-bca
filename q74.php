<?php
// Delete the cookie by setting its expiration time in the past
setcookie("user", "", time() - 3600);

// Check if the cookie is still available
if(isset($_COOKIE["user"])) {
    echo "Cookie 'user' is still set. Value: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' has been deleted.";
}

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
