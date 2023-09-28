<?php

declare(strict_types=1);

function check_login_error()
{
    if (isset($_SESSION['error_login'])) {
        $errors = $_SESSION['error_login'];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<p style='color:red';>" . $error . "</p>";
        }
        unset($_SESSION['error_login']);
    } else if (isset($_GET['login']) && $_GET['login'] === "success") {
        echo "<br>";
        echo "<p style='color:green';>Login Succesful</p>";
    }
}
function output_username()
{
    if (isset($_SESSION["user_id"])) {
        echo "You are loggedin with " . $_SESSION['user_username'];
    } else {
        echo "You are not logged in";
    }
}
