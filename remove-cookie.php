<?php

// Remove cookies using unset() on the $_COOKIE array
unset($_COOKIE['theme_cookie']);
unset($_COOKIE['philosopher_cookie']);

// Expire cookies by setting their expiration time to the past
setcookie('theme_cookie', '', time() - 3600, '/');
setcookie('philosopher_cookie', '', time() - 3600, '/');

// Redirect back to ch15-proj1.php
header('Location: ch15-proj1.php');
exit();

?>
