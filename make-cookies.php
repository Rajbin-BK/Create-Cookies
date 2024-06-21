<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the selected values from the form
    $theme = $_POST["theme"];
    $philosopher = $_POST["philosopher"];

    // Save the theme as a persistent cookie (expires in a day)
    setcookie("theme_cookie", $theme, time() + 86400, "/", "localhost"); // i am using the wamp server so using the local host.
    // Save the philosopher as a session cookie
    setcookie("philosopher_cookie", $philosopher, 0, "/");

    // Redirect back to the original page (ch15-proj1.php)
    header("Location: ch15-proj1.php");
    exit();
}

// If the form is not submitted, redirect to the original page
header("Location: ch15-proj1.php");
exit();
?>
