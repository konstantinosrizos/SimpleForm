<?php 
	
	$name = $lastName = $email = $comment = $gender = $degree = $school = $choose = "";

?>

<!DOCTYPE HTML>
<html>
<head>
	<script>
  function validateForm() {
    var x = document.forms["Form"]["gender"].value;
    if (x == "") {
        alert("Gender must be filled out");
        return false;
    } 
    var y = document.forms["Form"]["choose"].value;
    if (y == "") {
        alert("Interests must be filled out");
        return false;
    }  
}
</script>
<title></title>
<link rel="stylesheet" href="form.css">

</head>
<body>
	<div class="form-style-5">
		<form name="Form" method="post" onsubmit="return validateForm()" action="validate.php">
		<fieldset>
		<legend><span class="number">1</span> Candidate Info</legend>
		<input type="text" name="name" minlength="4" maxlength="20" placeholder="Your Name *" value="<?php echo $name;?>" required>
		<input type="text" name="lastname" minlength="4" maxlength="20" placeholder="Your LastName *" value="<?php echo $lastName;?>" >
		<input type="email" name="email" placeholder="Your Email *" value="<?php echo $email;?>" required>
		<textarea name="comment" placeholder="About yourself" value="<?php echo $comment;?>"></textarea>
			<label>Gender:</label>
  			<label>
    			<input type="radio" class="option-input radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"/>
    			Female
  			</label>
  			<label>
    			<input type="radio" class="option-input radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"/>
    			Male
  			</label>
  			<br><br>
  			<label>Degree:</label>
  			<label>
    			<input type="radio" name="degree" <?php if (isset($degree) && $degree=="Phd") echo "checked";?> class="option-input checkbox" value="Phd">
    			PhD
  			</label>
  			<label>
    			<input type="radio" name="degree" <?php if (isset($degree) && $degree=="Masters") echo "checked";?> class="option-input checkbox" value="Masters">
    			Masters
  			</label>
  			<label>
    			<input type="radio" name="degree" <?php if (isset($degree) && $degree=="Bachelors") echo "checked";?> class="option-input checkbox" value="Bachelors">
    			Bachelors
  			</label>
  			<label>
    			<input type="radio" name="degree" <?php if (isset($degree) && $degree=="Other") echo "checked";?> class="option-input checkbox" value="Other">
    			Other
  			</label>
		</fieldset>
		<br><br>
		<fieldset>
		<legend><span class="number">2</span> Additional Info</legend>
		<textarea name="school" placeholder="About Your School" value="<?php echo $school;?>"></textarea>
		<label for="job">Interests:</label>
		<select id="job" name="choose">
		<optgroup label="Tech">
		  <option></option>
		  <option <?php if (isset($choose) && $choose =="Social Media Manager") echo "checked";?> value="Social Media Manager">Social Media Manager</option>
		  <option <?php if (isset($choose) && $choose =="Web Analytics Developer") echo "checked";?> value="Web Analytics Developer">Web Analytics Developer</option>
		  <option <?php if (isset($choose) && $choose =="UX Designer") echo "checked";?> value="UX Designer">UX Designer</option>
		  <option <?php if (isset($choose) && $choose =="UI Designer") echo "checked";?> value="UI Designer">UI Designer</option>
		  <option <?php if (isset($choose) && $choose =="Mobile Developer") echo "checked";?> value="Mobile Developer">Mobile Developer</option>
		  <option <?php if (isset($choose) && $choose =="Data Base") echo "checked";?> value="Data Base">Data Base</option>
		  <option <?php if (isset($choose) && $choose =="other") echo "checked";?> value="other">Other</option>
		</optgroup>
		</select>
		</fieldset>
		<input type="submit" name="submit" value="Submit" />
		<input type="reset" name="reset" />
		</form>
	</div>
</body>
</html>


