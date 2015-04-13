
<?php 
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php 
	require 'nav.php';	
?>

    <div class="container">


		<div class="container">

			<form class="form-signin" action="login_user.php" method="post">

				<h2 class="form-signin-heading" align="center">Login</h2>

				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>

				<input type="password" name="password" class="form-control" placeholder="Password" required>

				<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">

			</form>

			<center> <h3><a href="../password_recovery/password_recovery_form.php">Forgot Password?</a></h3> </center>

		</div>

    	<hr class="featurette-divider" style="border-color: black">

<?php 
	require 'footer.php';
?>

    </div>
		
	<!-- jQuery -->
    	<script src="js/jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>

	</body>

</html>
