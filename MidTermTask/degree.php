 <?php

      $degreeErr="";
      $degree="";

if (empty($_POST["Drgree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}

            ?>

 <form method="POST" action=from.php> <fieldset>
      Degree:    

      <input type="checkbox" name="degree">SSC<?php if (isset($degree) && $degree=="SSC") echo "checked";?> 
        <input type="checkbox" name="degree">HSC<?php if (isset($degree) && $degree=="HSC") echo "checked";?> 
      <input type="checkbox" name="degree">BSc<?php if (isset($degree) && $degree=="BSc") echo "checked";?> 
        <input type="checkbox" name="degree">MSc<?php if (isset($degree) && $degree=="MSc") echo "checked";?> 
        <input type="submit" name="submit" value="Submit">
   </fieldset>
</form>
<?php
      
      echo "<h2>Your input is :</h2>";
      echo $degree;
?>