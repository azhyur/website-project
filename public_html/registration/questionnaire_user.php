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
		header("location: ../../index.php");
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

	header("location: ../../trainings/index.php");
	mysqli_close($con);

?>

	</body>

</html>
