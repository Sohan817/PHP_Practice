 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

 <body>
   <form action="include/formhandler.php" method="post">
     <label for="firstname">First Name</label>
     <input type="text" id="firstname" name="firstname" placeholder="Enter First Name"><br><br>
     <label for="lastname">Last Name</label>
     <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name"><br><br>
     <label for="favouritepet">Favourite Pet </label>
     <select name="favouritepet" id="favouritepet">
       <option value="none">None</option>
       <option value="dog">Dog</option>
       <option value="cat">Cat</option>
       <option value="bird">Bird</option>
     </select>
     <button type="submit">Submit</button>
   </form>
 </body>

 </html>