
<?php 
	require '../shared/header-tier1-signin.php';
?>
<body>

<?php 
	require '../shared/nav-simple-tier1.php';
?>

    <!-- Page Content -->
    <div class="container">

	<div class="container">

      		<form class="form-signin" action="register_user.php" method="post">

      			<h2 class="form-signin-heading" align="center">User Registration</h2>

			<div class="alert alert-danger" role="alert">

			    <center>

			    <strong>Passwords do not match.</strong>

			    </center>

			</div>

				<input type="text" name="firstname" class="form-control" placeholder="First Name" required autofocus>
				<input type="text" name="lastname" class="form-control" placeholder="Last Name" required>

				<br>

				<input type="email" name="email" class="form-control" placeholder="E-mail" required>

					<select name="age" class="form-control">

						<option value="0" disabled selected style="display:none;">Age</option>

						<?php

							for ($i=18; $i<=100; $i++) {
								echo "<option value=\"$i\">$i</option>\n";
							}

						?>

					</select>

					<select name="language" class="form-control">

						<option value="None" disabled selected style="display:none;">Language</option>

						<option value="Bengali">Bengali</option>"
						<option value="English">English</option>"
						<option value="French">French</option>"
						<option value="German">German</option>"
						<option value="Hindi">Hindi</option>"
						<option value="Japanese">Japanese</option>"
						<option value="Javanese">Javanese</option>"
						<option value="Korean">Korean</option>"
						<option value="Mandarin Chinese">Mandarin Chinese</option>"
						<option value="Marathi">Marathi</option>"
						<option value="Portugese">Portugese</option>"
						<option value="Russian">Russian</option>"
						<option value="Spanish">Spanish</option>"
						<option value="Tamil">Tamil</option>"
						<option value="Telugu">Telugu</option>"
						<option value="Turkish">Turkish</option>"
						<option value="Urdu">Urdu</option>"
						<option value="Vietnamese">Vietnamese</option>"
						<option value="Wu Chinese">Wu Chinese</option>"
						<option value="Yue Chinese / Cantonese">Cantonese</option>"

					</select>

				<br>

				<input type="text" name="username" class="form-control" placeholder="Username" required>

				<input type="password" name="password" id="password" onkeyup="checkPasswords(); return false;" class="form-control" placeholder="Password" required>

				<input type="password" name="con_password" id="con_password" onkeyup="checkPasswords(); return false;" class="form-control" placeholder="Confirm Password" required>

				<span id="confirmMessage" class="confirmMessage" style="display: block; margin: 0px auto; text-align: center;font-size: 16px;"></span>

				<br>

    			<input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">

    		</form>

    	</div> <!-- /container -->

    	<hr class="featurette-divider" style="border-color: black">

<?php 
	require '../shared/footer.php';
?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>