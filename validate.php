<?php
  
  session_start();

  $nameErr = $lastNameErr = $emailErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $_SESSION['name'] = test_input($_POST["name"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
    
    if (empty($_POST["lastname"])) {
    $lastNameErr = "Lastname is required";
  } else {
    $_SESSION['lastname'] = test_input($_POST["lastname"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["lastname"])) {
      $lastNameErr = "Only letters and white space allowed"; 
    }
  } 

    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $_SESSION['email'] = test_input($_POST["email"]);

    // check if e-mail address is well-formed
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

    $_SESSION['comment'] = test_input($_POST["comment"]);
    $_SESSION['gender'] = test_input($_POST["gender"]);
    $_SESSION['school'] = test_input($_POST["school"]);
    $_SESSION['choose'] = test_input($_POST["choose"]);
}
   
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function input() {
  $_SESSION['name'] = ($_POST["name"]);
  echo $_SESSION['name'];
  echo "<br>";
  $_SESSION['lastname'] = ($_POST["lastname"]);
  echo $_SESSION['lastname'];
  echo "<br>";
  $_SESSION['email'] = ($_POST["email"]);
  echo $_SESSION['email'];
  echo "<br>";
  $_SESSION['comment'] = ($_POST["comment"]);
  echo $_SESSION['comment'];
  echo "<br>";
  $_SESSION['gender'] = ($_POST["gender"]);
  echo $_SESSION['gender'];
  echo "<br>";
  $_SESSION['degree'] = ($_POST["degree"]);
  echo $_SESSION['degree'];
  echo "<br>";
  $_SESSION['school'] = ($_POST["school"]);
  echo $_SESSION['school'];
  echo "<br>";
  $_SESSION['choose'] = ($_POST["choose"]);
  echo $_SESSION['choose'];
  echo "<br><br>";

}

?>
<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="form-style-5">
    <form name="Form" method="post" action="complete.php">
      <fieldset>
        <legend><span class="number">?</span>Your Input:</legend>
      <?php

      if ($lastNameErr) {
        echo "<label>Error:</label>
        <p>Wrong Lastname validation.Check again.</p><br><br>
        <input type='button' value='Go back!' onclick='history.back()'>";
      } else if ($nameErr)  {
        echo "<label>Error:</label>
        <p>Wrong Name validation.Check again.</p><br><br>
        <input type='button' value='Go back!' onclick='history.back()'>";
      } else if ($emailErr) {
        echo "<label>Error:</label>
        <p>Wrong email validation.Check again.</p><br><br>
        <input type='button' value='Go back!' onclick='history.back()'>";
      } else {
        input();
        echo "<input type='submit' name='submit' value='Verify'>
          <input type='button' value='Go back!' onclick='history.back()'>";
      }
      ?>
      </fieldset>
    </form>
  </div>
</body>
</html>
