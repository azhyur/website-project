
<?php 
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php 
	require '../shared/nav-simple-tier1.php';
?>

    <div class="container">

		<div class="container">

			<form class="form-signin" action="password_recovery.php" method="post">

				<h2 class="form-signin-heading" align="center">Password Recovery</h2>

				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>

				<input type="email" name="email" class="form-control" placeholder="E-Mail Address" required>

				<br>

				<input class="btn btn-lg btn-primary btn-block" type="submit" value="Recover">

			</form>

		</div>

	<hr class="featurette-divider" style="border-color: black">

<?php 
	require '../shared/footer.php';
?>

    </div>

	</body>

</html>
