<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Grab the data
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_controller.inc.php";

        //Error Handling and Validation
        $errors = [];
        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all Fields!";
        }
        if (is_email_invalid($email)) {
            $errors["email_invalid"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_registered"] = "Email already registered!";
        }

        require_once "config_session.inc.php";
        if ($errors) {
            $_SESSION["error_signup"] = $errors;
            $signupData = [
                'username' => $username,
                'email' => $email
            ];
            $_SESSION['signup_data'] = $signupData;

            header('Location: ../index.php');
            die();
        }
        create_user($pdo, $username, $pwd, $email);

        header('Location: ../index.php?signup=success');
        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        echo "Query Fsiled " . $e->getMessage();
    }
} else {
    header('Location: ../index.php');
    die();
}
