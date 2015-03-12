
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

      		<form class="form-signin" style="max-width: 800px" action="questionnaire_user.php" method="post">

      			<h1 class="form-signin-heading" align="center">User Questionnaire</h1>

			<div class="row">
			    <div class="col-lg-8">

				<p>What is the answer to the first question?</p>
				<input type="radio" name="q1" value="a1">Answer 1<br>
				<input type="radio" name="q1" value="a2">Answer 2<br>

			    </div>
			</div>

    			<center><input class="btn btn-lg btn-primary btn-block" style="width: 330px" type="submit" value="Complete"></center>

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