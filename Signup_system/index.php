<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Signup_System</title>
</head>

<body>
    <form action="includes/signup.inc.php" method="post">
        <div class="container text-center">
            <h3>Signup Form</h3><br>
            <!-- <input type="text" name="username" placeholder="Enter username..."> <br><br>
            <input type="password" name="pwd" placeholder="Enter password..."><br><br>
            <input type="text" name="email" placeholder="Enter email..."><br><br> -->
            <?php
            signup_input();
            ?>
            <button class="btn btn-dark" type="submit">Signup</button>
        </div>
    </form>
    <br>
    <div class="container text-center">
        <?php
        check_signup_error();
        ?>
    </div>

    <br>
    <form action="includes/login.inc.php" method="post">
        <div class="container text-center">
            <h3>Login Form</h3><br>
            <input type="text" name="username" placeholder="Enter username..."> <br><br>
            <input type="password" name="pwd" placeholder="Enter password..."><br><br>
            <button class="btn btn-dark" type="submit">Login</button>
        </div>
    </form>
</body>

</html>