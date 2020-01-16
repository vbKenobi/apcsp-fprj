<!DOCTYPE html>
<html>
  <head>
    <title>Derivative and Series Calculator</title>
  </head>

<style>

input[type=button], input[type=submit], input[type=reset] {
  background-color: lightblue;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 50%;
}
  
input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid blue;
}   

body {
 	background-color: #6fbbd3;
}


body {
  font-size: 28px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  color: white;
}

.active {
  background-color: lightblue;
  color: black;
}

</style>



  <body>

    <ul>
  <li><a class="active" href="http://rpi09/sp3b/index.html">Home</a></li>
</ul>
    

    <h1>Welcome</h1>
    <p>This program was made by Yajn B. and Bryton L. To access the derivative calcualtor please put dy in the upper bound and dx in the lower bound. You must enter all inputs for the program to work. </p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $arg3 = $arg4 = $arg5 = $arg6 = $arg7 = $arg8 = $arg9 = $arg10 = $output = $retc = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg6 = test_input($_POST["arg6"]);
         $arg7 = test_input($_POST["arg7"]);
         $arg8 = test_input($_POST["arg8"]);
         $arg9 = test_input($_POST["arg9"]);
         $arg10 = test_input($_POST["arg10"]);
         exec("/usr/lib/cgi-bin/sp3b/FP " . $arg1 . " " . $arg2 . " "  . $arg3 . " "  . $arg4 . " "  . $arg5 . " "  . $arg6 . " "  . $arg7 . " "  . $arg8 . " "  . $arg9 . " "  . $arg10 , $output, $retc); 
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Upper Bound: <input type="text" name="arg1"><br>
      Lower Bound: <input type="text" name="arg2"><br>
      Polynomial 1 (Coefficient): <input type="text" name="arg3"><br>
      Polynomial 1 (Exponent): <input type="text" name="arg4"><br>
      Polynomial 2 (Coefficient): <input type="text" name="arg5"><br>
      Polynomial 2 (Exponent): <input type="text" name="arg6"><br>
      Polynomial 3 (Coefficient): <input type="text" name="arg7"><br>
      Polynomial 3 (Exponent): <input type="text" name="arg8"><br>
      Polynomial 4 (Coefficient): <input type="text" name="arg9"><br>
      Polynomial 4 (Exponent): <input type="text" name="arg10"><br>
      <br>
      <input type="submit" value="Go!">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Program Output (an array):</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
       }
    ?>
  </body>
</html>


