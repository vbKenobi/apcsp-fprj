<!DOCTYPE html>
<html
  <head>
    <title>Form Input 2</title>
  </head>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

input[type=text]:focus {
  background-color: lightblue;
}
  
  body {
  background-color: #6fbbd3;
}
</style>

  <body>

    <h1>Derivative and Series Calcualtor</h1>
    <p>Welcome to the Derivative and Series Calcualtor made by Yajn Bollapragada, and Bryton Lee. To use the derivative put dy in the upper bound and dx in the lower bound. Then enter the coefficaints for your four term polynomial. You must enter an input into ALL boxes otherwise you will be asked to retype your input.</p>

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
      Polynomial 4 (Exponent): <input type="text" name="arg9"><br>
      Polynomial 4 (Coefficient): <input type="text" name="arg10"><br>
      <br>
      <input type="submit" value="Go!">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Your Input:</h2>";
         echo $arg1;
         echo "<br>";
         echo $arg2;
         echo "<br>";
         echo $arg3;
         echo "<br>";
         echo $arg4;
         echo "<br>";
         echo $arg5;
         echo "<br>";
         echo $arg6;
         echo "<br>";
         echo $arg7;
         echo "<br>";
         echo $arg8;
         echo "<br>";
         echo $arg9;
         echo "<br>";
         echo $arg10;
         echo "<br>";

       
         echo "<h2>Program Output (an array):</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
    ?>
    
  </body>
</html>


