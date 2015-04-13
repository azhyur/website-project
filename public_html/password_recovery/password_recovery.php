<!DOCTYPE html>

<html lang="en">

        <head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>Password Recovery</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/one-page-wonder.css" rel="stylesheet">

			<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        	<![endif]-->

        </head>

			<?php
					$con = mysqli_connect("ecurri3.mysql.uic.edu", "ecurri3-rw", "Forget1900!", "ecurri3");

					if (mysqli_connect_errno()) {
							 echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$username = mysqli_real_escape_string($con, $_POST['username']);
					$email = mysqli_real_escape_string($con, $_POST['email']);

					$result = mysqli_query($con, "SELECT * FROM auditory_users");

					while($row = mysqli_fetch_array($result)){
							if(strtoupper($username) == strtoupper( $row['username'])){

									if(strtoupper($email) == strtoupper($row['email'])){

										$message = "Your password is " . $row['password'] . "\r\n";
										echo '	<body>

													<div class="container">

														<center>

															<h2>An E-mail has been sent containing your password.</h2>

															<a href="../index.php">Click here to return to the homepage.</a>

														</center>

													</div>

												</body>';
										mail($email, "Password Recovery", $message);
										mysqli_close($con);
										exit();
									}
									//Incorrect email with given username
									else{
										header("location: password_recovery_form-error-email.html");
										mysqli_close($con);
										exit();
									}
							}
					}

					//Username not found
					header("location: password_recovery_form-error-username.html");
					mysqli_close($con);

			?>