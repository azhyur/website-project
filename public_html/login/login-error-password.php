
<?php
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php
	require '../shared/nav-simple-tier1.php';
?>

    <div class="container">

		<div class="container">

			<form class="form-signin" action="login_user.php" method="post">

				<h2 class="form-signin-heading" align="center">Login</h2>

				<div class="alert alert-danger" role="alert">

			    	    <center>

			    	    <strong>Password is incorrect.</strong>

			    	    </center>

				</div>

				<input type="text" name="email" class="form-control" placeholder="Email" required autofocus>

				<input type="password" name="password" class="form-control" placeholder="Password" required>

				<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">

			</form>

			<center> <h3><a href="../password_recovery/password_recovery_form.php">Forgot Password?</a></h3> </center>

		</div>

	<hr class="featurette-divider" style="border-color: black">

<?php
require '../shared/footer.php';
?>

    </div>

	<!-- jQuery -->
    	<script src="js/jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>

	</body>

</html>