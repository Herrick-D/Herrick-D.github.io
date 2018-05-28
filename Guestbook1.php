<html>
   <head>
      <link href="style.css" type="text/css" rel="stylesheet">

   </head>
   <body>
      <nav class="navbar">
         <a style="float: left;" href="./index.html">Daniel Herrick</a>
         <a href="./contact.html">Contact Me</a>
         <!--
         <a href="./Guestbook.php">Guestbook</a>
      -->
         <a href="https://github.com/Herrick-D/">GitHub repos</a>
      </nav>
      <div class="guestbook">
      <div class="Welcome">

   <?php
      session_start();
      $name = $state = "";

      $name = $_POST["name"];
      $state = $_POST["state"];

      echo "Welcome $name from $state. Thank you for visiting my website!";

      $arr = array($name,$state,"\n");
      $implode = implode("\t",$arr);

      file_put_contents('Guestbook.txt', $implode, FILE_APPEND);

      exit();

   ?>
      </div>
      </div>
   </body>

</html>
