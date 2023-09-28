<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Grab the data
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_controller.inc.php';

        //Error handling and validation
        $errors = [];
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all Fields!";
        }

        $result = get_user($pdo, $username);

        if (is_username_exists($result)) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        if (!is_username_exists($result) && is_password_wrong($pwd, $result['pwd'])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        require_once "config_session.inc.php";
        if ($errors) {
            $_SESSION["error_login"] = $errors;
            header('Location: ../index.php');
            die();
        }
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result['id'];
        session_id($sessionId);
        $_SESSION["user_id"] = $result["id"];
        $_SESSION['user_username'] = htmlspecialchars($result["username"]);
        $_SESSION['last_regeneration'] = time();
        header('Location: ../index.php?login=success');
        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        echo "Query Failed" . $e->getMessage();
    }
} else {
    header('Location: ../index.php');
    die();
}
