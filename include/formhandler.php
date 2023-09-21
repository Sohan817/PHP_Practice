<?php
//var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $pet = htmlspecialchars($_POST['favouritepet']);

    if (empty($firstname)) {
        exit();
        header("Location: ../index.php");
    }
    if (empty($lastname)) {
        exit();
        header("Location: ../index.php");
    }
    if (empty($pet)) {
        exit();
        header("Location: ../index.php");
    }

    echo 'This is the data you have submitted';
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;
} else {
    header("Location:../index.php");
}
