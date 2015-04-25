<?php
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php
	require '../shared/nav-simple-tier1.php';
?>

<?php

	ob_start();
	session_start();

	if(!isset($_SESSION['sess_user_id'])){
		header("location: ../index.php");
		exit();
	}

	$con = mysqli_connect("localhost", "root", "", "auditory_training");

	if (mysqli_connect_errno()) {
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$a1 = mysqli_real_escape_string($con, $_POST['q1']);
	$a2 = mysqli_real_escape_string($con, $_POST['q2']);
	$a3 = mysqli_real_escape_string($con, $_POST['q3']);
	$a4 = mysqli_real_escape_string($con, $_POST['q4']);

	if(strlen($_POST['q1']) < 1 || strlen($_POST['q2']) < 1 || strlen($_POST['q3']) < 1 || strlen($_POST['q4']) < 1)
		header("location: questionnaire-form.php");

	while($row = mysqli_fetch_array($result)){
		if(strtoupper($_SESSION['sess_username']) == strtoupper( $row['username'])){
			$sql="INSERT INTO users (gender, device, duration, experience) VALUES ('$a1', '$a2', '$a3', '$a4')";
			if(!mysqli_query($con, $sql)){
	        	die('Error: ' . mysqli_error($con));
	        }
		}
	}

	echo '	<body>

				<div class="container">

					<center>

						<h2>Thank you for completing the questionnaire.</h2>

						<p>By completing the questionnaire, you gain access to testing, training, and other features on the auditory training website.</p>

						<a href="../profile/profile.php">You may now start your auditory training.</a>

						<a href="../index.php">Click here to return to the homepage.</a>

					</center>

				</div>

			</body>';
	mysqli_close($con);

?>

	</body>

</html>
