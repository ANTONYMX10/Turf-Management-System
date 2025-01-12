<?php
// logout.php

// Clear the 'username' cookie by setting its expiration time to the past
setcookie('username', '', time() - 10, '/');  // Expire the cookie

// Redirect to login page
header("Location: login.php");
exit();
?>
