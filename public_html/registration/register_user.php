<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Registration</title>

		<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Bootstrap Core CSS -->
    		<link href="../css/bootstrap.min.css" rel="stylesheet">

    		<!-- Custom styles for this template -->
    		<link href="../css/signin.css" rel="stylesheet">

    		<!-- Custom CSS -->
    		<link href="../css/one-page-wonder.css" rel="stylesheet">

		<script type="text/javascript" src="../checkPasswords.js"></script>

		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>

	<body>

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

        $sql="INSERT INTO auditory_users (firstName, lastName, userName, passWord, email, age, language) VALUES ('$firstName', '$lastName', '$userName', '$password', '$email', '$age', '$language')";

        if(!mysqli_query($con, $sql)){
        	die('Error: ' . mysqli_error($con));
        }
        echo '	<body>

					<div class="container">

						<center>

							<h2>Thank you for registering.</h2>

							<a href="../index.html">Click here to return to the homepage.</a>

						</center>

					</div>

				</body>';
		mysqli_close($con);

?>

	</body>

</html>
