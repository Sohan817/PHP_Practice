<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
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
    <div class="container text-center">
        <h3><?php output_username(); ?></h3>
    </div>
    <?php
    if (!isset($_SESSION["user_id"])) { ?>
        <form action="includes/signup.inc.php" method="POST">
            <div class="container text-center">
                <h3>Signup Form</h3><br>
                <!-- <input type="text" name="username" placeholder="Enter username..."> <br><br>
            <input type="password" name="pwd" placeholder="Enter password..."><br><br>
            <input type="text" name="email" placeholder="Enter email..."><br><br> -->
                <?php
                signup_input();
                ?>
                <button class="btn btn-dark">Signup</button>
            </div>
        </form>
    <?php
    }
    ?>
    <br>
    <div class="container text-center">
        <?php
        check_signup_error();
        ?>
    </div>
    <div class="container text-center">
        <?php
        if (!isset($_SESSION["user_id"])) { ?>
            <form action="includes/login.inc.php" method="POST">
                <div class="container text-center">
                    <h3>Login Form</h3><br>
                    <input type="text" name="username" placeholder="Enter username..."> <br><br>
                    <input type="password" name="pwd" placeholder="Enter password..."><br><br>
                    <button class="btn btn-dark">Login</button>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
    <br>

    <br>
    <div class="container text-center">
        <?php
        check_login_error();
        ?>
    </div>
    <?php
    if (isset($_SESSION["user_id"])) { ?>
        <form action="includes/logout.inc.php" method="POST">
            <div class="container text-center">
                <button class="btn btn-dark">Logout</button>
            </div>
        </form>
    <?php
    }
    ?>

</body>

</html>