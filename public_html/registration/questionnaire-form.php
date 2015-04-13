
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

				<p>Are you male or female?</p>
				<input type="radio" name="q1" value="male">Male<br>
				<input type="radio" name="q1" value="female">Female<br>

			    </div>
			</div>

			<div class="row">
			    <div class="col-lg-8">

				<p>Do you use a hearing aid or a cochlear implant?</p>
				<input type="radio" name="q2" value="hearing_aid">Hearing Aid<br>
				<input type="radio" name="q2" value="cochlear_implant">Cochlear Implant<br>

			    </div>
			</div>

			<div class="row">
			    <div class="col-lg-8">

				<p>How long have you had a problem with your hearing?</p>
				<input type="radio" name="q3" value="1-">Less than 1 year<br>
				<input type="radio" name="q3" value="1_5">1-5 years<br>
				<input type="radio" name="q3" value="5_10">5-10 years<br>
				<input type="radio" name="q3" value="10_15">10-15 years<br>
				<input type="radio" name="q3" value="15+">Longer than 15 years<br>

			    </div>
			</div>

			<div class="row">
			    <div class="col-lg-8">

				<p>Have you ever participated in auditory training before?</p>
				<input type="radio" name="q4" value="yes">Yes<br>
				<input type="radio" name="q4" value="no">No<br>

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