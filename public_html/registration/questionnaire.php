
<?php 
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php

	ob_start();
	session_start();

	if(isset($_SESSION['sess_user_id'])){

		header("location: questionnaire-form.php");
		exit();

	}
	else{
		
		header("location: ../login/login.php");
		exit();
	}

?>