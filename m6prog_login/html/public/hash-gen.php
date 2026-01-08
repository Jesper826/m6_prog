<?php

if (isset($_GET['pwd'])) {
    $password = $_GET['pwd'];
    $hash = password_hash($password, PASSWORD_ARGON2ID);
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Hash: " . htmlspecialchars($hash) . "<br>";
    echo "<br>Copy the hash above for your INSERT statement.";
} else {
    echo "Usage: ?pwd=your_password_here";
}
?>
