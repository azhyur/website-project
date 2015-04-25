<?php
	require '../shared/header-tier1-signin.php';
?>

<body>

<?php
	require '../shared/nav-tier1.php';
?>

    <div class="container">

	<div class="container">

	    <form class="form-signin" action="logout_user.php" method="post">

	    	<input class="btn btn-lg btn-primary btn-block" type="submit" value="Logout">

	    </form>

	    <h2 align="center"><a href="../trainings/index.php">Training Page</a></h2>

	</div>

	<hr class="featurette-divider" style="border-color: black;">

<?php
	require '../shared/footer.php';
?>

    </div>

	<!-- JQuery -->
	<script src=js.jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>

	</body>

</html>

