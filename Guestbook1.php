<html>
   <head>
      <link href="DropdownCSS.css" type="text/css" rel="stylesheet" />
      
      <style>
         body{
            background-image: url('./Pictures/Journal.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin-top: 10px;
            margin-right: 60px;
         }
         .Welcome{
            background-color: rgba(218,195,150, 0.8);
            padding: 10px;
            color: black;
            border-radius: 25px;
            font-family: cursive;
         }
      </style>
      
   </head>
   <body>
      <ul>
               <li><a class="" href="index.html">Home</a></li>
               <li class="dropdown">
                  <a href="#" class="dropbtn">Guestbook</a>
                  <div class="dropdown-content">
                     <a href="Guestbook.php">Guestbook PHP</a>
                     <a href="guestbookJSON.php">Guestbook JSON</a>
                  </div>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropbtn">Assignments</a>
                  <div class="dropdown-content">
                     <a href="http://www.cs.scranton.edu/~herrickd2/assignment1/">Assignment1</a>
                     <a href="regularExpressions.php">Regular Expressions</a>

                  </div>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropbtn">Javascript</a>
                  <div class="dropdown-content">
                     <a href="DigitalClock.html">Digital Clock</a>
                     <a href="HitCounter.html">Hit Counter</a>
                  </div>
               </li>
               <li><a class="" href="FindIggyStart.html">Find Iggy Game</a></li>
            </ul>     
      <a href="Guestbook.phps">Guestbook Script</a>
      
      
      <div class="Welcome">
   
   <?php
      session_start();
      $fname = $lname = $city = $state = "";
      
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $city = $_POST["city"];
      $state = $_POST["state"];      
      
      echo "Welcome $fname $lname from $city, $state. Thank you for signing my guestbook!";
      
      $arr = array($fname,$lname,$city,$state,"\n");
      $implode = implode("\t",$arr);

      file_put_contents('Guestbook.txt', $implode, FILE_APPEND);
      

      
      exit();
    
   ?>
      </div>
     </body>
   
</html>