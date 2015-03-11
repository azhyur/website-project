<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/one-page-wonder.css" rel="stylesheet">

    <script type="text/javascript" src="../js/checkPasswords.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="../index.html">Home Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>
        <!-- /.container -->
    </nav>

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

				<br>

				<input type="text" name="username" class="form-control" placeholder="Username" required>

				<input type="password" name="password" id="password" onkeyup="checkPasswords(); return false;" class="form-control" placeholder="Password" required>

				<input type="password" name="con_password" id="con_password" onkeyup="checkPasswords(); return false;" class="form-control" placeholder="Confirm Password" required>

				<span id="confirmMessage" class="confirmMessage" style="display: block; margin: 0px auto; text-align: center;font-size: 16px;"></span>

				<br>

    			<input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">

    		</form>

    	</div> <!-- /container -->

    	<hr class="featurette-divider">

	<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Auditory Training -- Rush Medical University</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>