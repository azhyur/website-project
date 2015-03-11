<!DOCTYPE hmtl>

<html lang="en">

	<head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>User Login Webpage</title>

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

	<body>

<?php

	ob_start();
	session_start();

	if(isset($_SESSION['sess_user_id'])){

		header("location: login-error-already-logged-in.html");
		exit();

	}

	$con = mysqli_connect("ecurri3.mysql.uic.edu", "ecurri3-rw", "Forget1900!", "ecurri3");

	if (mysqli_connect_errno()) {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

	$username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

	$result = mysqli_query($con, "SELECT * FROM auditory_users");

	while($row = mysqli_fetch_array($result)){
		if(strtoupper($username) == strtoupper( $row['username'])){
			if($password == $row['password']){
				session_regenerate_id();
				$_SESSION['sess_user_id'] = $row['id'];
				$_SESSION['sess_username'] = $row['username'];
				session_write_close();
				header('Location: ../index.html');
				die("Login successful");
			}
			else{
				header("location: login-error-password.html");
				exit();

			}
		}
	}

	header("location: login-error-username.html");

	mysqli_close($con);

?>

	</body>

</html>