<?php
session_start();
session_destroy();
echo("You are successfully logged out!");
?>

<a href="login-user-form.php">Login</a>