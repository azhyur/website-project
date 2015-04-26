
<?php
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php
	require '../shared/nav-simple-tier1.php';
?>

    <div class="container">


		<div class="container">

			<h2 class="form-signin-heading" align="center">Login</h2>

			<form class="form-inline" action="login_user.php" method="post" style="text-align:center;">

				<div class="row">
		    		<div class="form-group">

					<input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
					<input type="password" name="password" class="form-control" placeholder="Password" required>

		    		</div>
		    		</div>
			
				<br>

				<center><input class="btn btn-lg btn-primary btn-block" style="width:25%;" type="submit" value="Login"></center>

			</form>

			<div class="row">
		    	<div class="form-group">
				<center> <h3><a href="../password_recovery/password_recovery_form.php">Forgot Password?</a></h3> </center>
				<center> <h3><a href="../registration/registration.php">Not Registered Yet?</a></h3> </center>
			</div>
			</div>

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