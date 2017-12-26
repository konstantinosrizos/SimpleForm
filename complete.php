<?php
	
	session_start();

	include("database.php");



	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['name'] = $_SESSION['name']; 

    $_SESSION['lastname'] = $_SESSION['lastname'];
    
    $_SESSION['email'] = $_SESSION['email'];

    $_SESSION['comment'] = $_SESSION['comment'];

    $_SESSION['gender'] = $_SESSION['gender'];

    $_SESSION['degree'] = $_SESSION['degree'];

    $_SESSION['school'] = $_SESSION['school'];

    $_SESSION['choose'] = $_SESSION['choose'];

 	}

    try {
            
            $query = $db->prepare("SELECT user_id FROM users WHERE email=:email");
            $query->bindParam("email", $_SESSION['email'], PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo '<script type="text/javascript">'; 
                echo 'alert("Email is already in use!");'; 
                echo 'window.location.href = "form.php";';
                echo '</script>';
                return true;
            } else {
            //    return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }


    try {
            $query = $db->prepare("INSERT INTO users(name, last_name, email, about_yourself, gender, degree, about_your_school, interests) VALUES (:name, :lastname, :email, :comment, :gender, :degree, :school, :choose)");
            $query->bindParam("name", $_SESSION['name'], PDO::PARAM_STR);
            $query->bindParam("lastname", $_SESSION['lastname'], PDO::PARAM_STR);
            $query->bindParam("email", $_SESSION['email'], PDO::PARAM_STR);
            $query->bindParam("comment", $_SESSION['comment'], PDO::PARAM_STR);
            $query->bindParam("gender", $_SESSION['gender'], PDO::PARAM_STR);
            $query->bindParam("degree", $_SESSION['degree'], PDO::PARAM_STR);
            $query->bindParam("school", $_SESSION['school'], PDO::PARAM_STR);
            $query->bindParam("choose", $_SESSION['choose'], PDO::PARAM_STR);
            $query->execute();
        //  return $db->lastInsertId();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }

function input() {
	$_SESSION['name'] = $_SESSION['name'];
	echo $_SESSION['name'];
	echo "<br>";
	$_SESSION['lastname'] = $_SESSION['lastname'];;
	echo $_SESSION['lastname'];
	echo "<br>";
	$_SESSION['email'] = $_SESSION['email'];
	echo $_SESSION['email'];
	echo "<br>";
	$_SESSION['comment'] = $_SESSION['comment'];
	echo $_SESSION['comment'];
	echo "<br>";
	$_SESSION['gender'] = $_SESSION['gender'];
	echo $_SESSION['gender'];
	echo "<br>";
	$_SESSION['degree'] = $_SESSION['degree'];
	echo $_SESSION['degree'];
	echo "<br>";
	$_SESSION['school'] = $_SESSION['school'];
	echo $_SESSION['school'];
	echo "<br>";
	$_SESSION['choose'] = $_SESSION['choose'];
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
		<form>
			<fieldset>
				<legend><span class="number">#</span> Complete </legend>
				<?php
					echo input();
				?>
				<input type='button' value='Go to form!' onclick="window.location='form.php';">
			</fieldset>
		</form>
	</div>
</body>
</html>
