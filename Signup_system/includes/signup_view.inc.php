<?php

declare(strict_types=1);
function signup_input()
{
    if (isset($_SESSION['signup_data']['username']) && !isset($_SESSION['error_signup']['username_taken'])) {
        echo '<input type="text" name="username" placeholder="Enter username..." 
        value = "' . $_SESSION['signup_data']['username'] . '"> <br><br>';
    } else {
        echo '<input type="text" name="username" placeholder="Enter username..."> <br><br>';
    }
    echo '<input type="password" name="pwd" placeholder="Enter password..."><br><br>';

    if (
        isset($_SESSION['signup_data']['email']) && !isset($_SESSION['error_signup']['email_registered']) &&
        !isset($_SESSION['error_signup']['email_invalid'])
    ) {
        echo '<input type="text" name="email" placeholder="Enter email..." 
        value = "' . $_SESSION['signup_data']['email'] . '"> <br><br>';
    } else {
        echo '<input type="text" name="email" placeholder="Enter email..."> <br><br>';
    }
}
function check_signup_error()
{
    if (isset($_SESSION["error_signup"])) {
        $errors = $_SESSION["error_signup"];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<p style='color:red;'>" . $error . "</p>";
        }
        unset($_SESSION["error_signup"]);
    } else if (isset($_GET['signup']) && $_GET['signup'] === "success") {

        echo "<br>";
        echo "<p style='color:green;'>Signup successful!</p>";
    }
}
