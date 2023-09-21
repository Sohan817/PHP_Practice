 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

 <body>
   <!-- SERVER super global variable -->
   <?php
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    ?>
   <!-- GET and POSST suuper global variable -->
   <?php
    echo $_GET['name'];
    echo $_GET['eyecolor'];
    echo "<br>";
    echo $_REQUEST['name'];
    echo "<br>";
    echo $_COOKIE['name'];
    echo "<br>";
    $_SESSION['username'] = "Sohan";
    echo $_SESSION['username'];
    ?>
 </body>

 </html>