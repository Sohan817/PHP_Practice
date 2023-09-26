<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grab the data
    $usersearch = $_POST['usersearch'];
    try {
        require_once "database_connection/dbh.inc.php";

        //Named process
        $query = "SELECT * FROM comments WHERE username=:usersearch;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":usersearch", $usersearch);

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<title>Document</title>
</head>

<body>
    <section class="container text-center">
        <h3>Search Result</h3>
        <?php
        if (empty($results)) {
            echo "<div>";
            echo "<P>No results found</P>";
            echo "</div>";
        } else {
            foreach ($results as $result) {
                echo "<div>";
                echo "<h5>" . htmlspecialchars($result['username']) . "</h5>";
                echo "<p>" . htmlspecialchars($result['comment_text']) . "</p>";
                echo "<p>" . htmlentities($result['created_at']) . "</p>";
                echo "</div>";
            }
        }
        ?>
    </section>
</body>

</html>