<html>
   <head>
      
      <script type="text/javascript">// <![CDATA[
         function Validate()
         {
            var fname=document.form["fname"].value;
            var lname=document.form["lname"].value;
            var city =document.form["city"].value;
            var state=document.form["state"].value;

            if(fname==null || fname=="")
            {
               alert("Please enter your First Name! ");
               return false;
            }
            if(lname==null || lname=="")
            {
               alert("Please enter your Last Name!");
               return false;
            }
            if(city == null || city = ""){
               alert("Please enter you city! ");
               return false;
            }
            if(state==null || state = ""){
               alert("Please enter your state!");
               return false;
            }
            
        </script>
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
         .Form, .Previous{
            margin: 10px;
            background-color: rgba(218,195,150, 0.4);
            padding: 10px;
            color: black;
            border-radius: 25px;
            font-family: cursive;
         }
        </style>    
      
   </head>
   <title>Daniel Herrick's Website</title>
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
      
      <h1>Guestbook</h1>
      
      <div class="Form">
      <form method="post" action="Guestbook1.php" onsubmit="return Validate();">
         <p>First Name: <input type ="text" size=25 name="fname" required></p>
         <p>Last Name: <input type="text" size=25 name="lname" required></p>
         <p>City: <input type="text" name="city" required></p>
         <p>State: <input type="text" name="state" required></p>
         <p><input type="submit" value="Submit"></p>
      </form>
      </div>
      
      <div class="Previous">
     <h1>Previous Guests:</h1>
         <?php
	         $contents = file_get_contents("Guestbook.txt"); //??file("Guestbook.txt"'
	         $guests = explode("\n", $contents);
	
	         foreach($guests as $guest){ //??foreach($contents as $guest);
	         	list($fname,$lname,$city,$state) = explode("\t", $guest);
	         	echo "First Name: " . "$fname <br>";
	         	echo "Last Name: " . "$lname <br>";
               echo "City: " . "$city <br>";
               echo "State: " . "$state <br>";
	         	echo "<br>";
               
            }

	
	         	         	 
	         	
         ?>
         
         <div>

      
       <a href="Guestbook.phps">Guestbook Script</a>
   </body>
</html>