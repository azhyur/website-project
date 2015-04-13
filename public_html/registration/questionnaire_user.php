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

	$a1 = mysqli_real_escape_string($con, $_POST['q1']);
	$a2 = mysqli_real_escape_string($con, $_POST['q2']);
	$a3 = mysqli_real_escape_string($con, $_POST['q3']);
	$a4 = mysqli_real_escape_string($con, $_POST['q4']);


        $sql="INSERT INTO users (gender, device, duration, experience) VALUES ('$a1', '$a2', '$a3', '$a4')";

        if(!mysqli_query($con, $sql)){
        	die('Error: ' . mysqli_error($con));
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
