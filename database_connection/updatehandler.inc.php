<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grab the data
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    try {
        require_once "dbh.inc.php";

        //Named process
        $query = "UPDATE users SET username=:username, pwd=:pwd, email=:email WHERE id =8;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location : ../index.php");
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
