
<?php 
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php 
	require '../shared/nav-simple-tier1.php';
?>

<?php

	$con = mysqli_connect("ecurri3.mysql.uic.edu", "ecurri3-rw", "Forget1900!", "ecurri3");

	if (mysqli_connect_errno()) {
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$firstName = mysqli_real_escape_string($con, $_POST['firstname']);
	$lastName = mysqli_real_escape_string($con, $_POST['lastname']);

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$age = (is_numeric($_POST['age']) ? (int)$_POST['age'] : 0);
	$language = mysqli_real_escape_string($con, $_POST['language']);

    	$userName = mysqli_real_escape_string($con, $_POST['username']);
    	$password = mysqli_real_escape_string($con, $_POST['password']);
	$con_password = mysqli_real_escape_string($con, $_POST['con_password']);

	if($age == 0){
	    header("location: registration-error-age-null.php");
	    exit();
	}

	if($age < 18){
	    header("location: registration-error-age-18.php");
	    exit();
	}

	if(strcmp($_POST['password'], $_POST['con_password']) != 0){
	    header("location: registration-error-password.php");
	    exit();
	}

        $sql="INSERT INTO auditory_users (firstname, lastname, username, password, email, age, language) VALUES ('$firstName', '$lastName', '$userName', '$password', '$email', '$age', '$language')";

        if(!mysqli_query($con, $sql)){
        	die('Error: ' . mysqli_error($con));
        }
        echo '	<body>

					<div class="container">

						<center>

							<h2>Thank you for registering.</h2>

							<h2><a href="questionnaire.php">Complete the questionnaire.</a></h2>

							<p>You have the option to complete it at a later time, but you will not be able to complete in Auditory Training until it is completed.</p>

							<a href="../index.php">Click here to return to the homepage.</a>

						</center>

					</div>

				</body>';
		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
		session_write_close();
		mysqli_close($con);

?>

	</body>

</html>
