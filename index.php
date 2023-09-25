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
  <div class="container text-center">
    <h3>Sign up</h3>
    <form action="database_connection/formhandler.inc.php" method="post">
      <input type="text" name="username" placeholder="Enter username..."> <br><br>
      <input type="password" name="pwd" placeholder="Enter password..."> <br><br>
      <input type="text" name="email" placeholder="Enter email..."> <br><br>
      <button class="btn btn-dark" type="submit">Sign up</button>
    </form>
  </div>
</body>

</html>