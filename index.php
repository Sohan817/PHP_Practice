<?php
//Start a session
session_start();
//Set a session
$_SESSION['username'] = "Sohan";
//End single session
unset($_SESSION['username']);
//End multiple session
session_unset();
//Destroy a session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo $_SESSION['username'];
  ?>
</body>

</html>