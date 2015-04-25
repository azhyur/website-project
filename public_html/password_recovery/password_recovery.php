
<?php
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php
	require '../shared/nav-simple-tier1.php';
?>

			<?php
					$con = mysqli_connect("localhost", "root", "", "auditory_training");

					if (mysqli_connect_errno()) {
							 echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$username = mysqli_real_escape_string($con, $_POST['username']);
					$email = mysqli_real_escape_string($con, $_POST['email']);

					$result = mysqli_query($con, "SELECT * FROM users");

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
										header("location: password_recovery_form-error-email.php");
										mysqli_close($con);
										exit();
									}
							}
					}

					//Username not found
					header("location: password_recovery_form-error-username.php");
					mysqli_close($con);

			?>

	<hr class="featurette-divider" style="border-color: black">

<?php
	require '../shared/footer.php';
?>

    </div>

	</body>

</html>
