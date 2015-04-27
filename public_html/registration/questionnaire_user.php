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
	$userid = mysqli_real_escape_string($con, $_SESSION['sess_user_id']);

	if(strlen($_POST['q1']) < 1 || strlen($_POST['q2']) < 1 || strlen($_POST['q3']) < 1 || strlen($_POST['q4']) < 1)
		header("location: questionnaire-form.php");

	$sql="UPDATE users SET gender='$a1', device='$a2', duration='$a3', experience='$a4' WHERE id='$userid'";
	if(!mysqli_query($con, $sql)){
		die('Error: ' . mysqli_error($con));
	}

	header("location: ../trainings/index.php");
	mysqli_close($con);

?>

	</body>

</html>
