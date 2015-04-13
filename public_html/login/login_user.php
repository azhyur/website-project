
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

	if(isset($_SESSION['sess_user_id'])){

		header("location: login-error-already-logged-in.php");
		exit();

	}

	$con = mysqli_connect("localhost", "root", "", "auditory_training");

	if (mysqli_connect_errno()) {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

	$username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

	$result = mysqli_query($con, "SELECT * FROM users");

	while($row = mysqli_fetch_array($result)){
		if(strtoupper($username) == strtoupper( $row['username'])){
			if($password == $row['password']){
				session_regenerate_id();
				$_SESSION['sess_user_id'] = $row['id'];
				$_SESSION['sess_username'] = $row['username'];
				session_write_close();
                if(is_null($row['device'])) {
                    header('Location: ../registration/questionnaire.php');
                } else {
                    header('Location: ../index.php');
                }
				die("Login successful");
			}
			else{
				header("location: login-error-password.php");
				exit();

			}
		}
	}

	header("location: login-error-username.php");

	mysqli_close($con);

?>

	</body>

</html>
