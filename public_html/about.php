<?php 
	require 'shared/header-jumbotron.php';
?>

<body>

<?php
    $current = 'about';
?>

<?php 
	require 'shared/nav.php';
?>

    <div class="container">

	<div class="jumbotron">
        <h1>Overview</h1>
        <p class="lead">The Auditory Research Laboratory (ARL) is a dedicated research facility of the Department of Communication Disorders and Sciences at Rush University Medical Center. The mission of the ARL is twofold; It is the advancement of knowledge on theoretical and applied aspects of auditory perception and cognition in normal-hearing and hearing impaired populations and it is in training of future professionals in the field of communication disorders and sciences in the development and conduct of experimental research. </p>
        <p><a class="btn btn-lg btn-success" href="registration/registration.php" role="button">Sign up today</a></p>
      	</div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Improve Over Time</h4>
          <p>Continual training will improve your auditory abilities.</p>

          <h4>Talk To Others</h4>
          <p>Communicate with professionals or speak to other people with auditory disabilites with our user forums.</p>
        </div>

        <div class="col-lg-6">
          <h4>Work Towards A Cause</h4>
          <p>Your auditory results will be used for data by Auditory Disability specialists in advancing treatment for patients.</p>

          <h4>Learn About Yourself</h4>
          <p>Find out how good your hearing is and watch how you improve over time.</p>
        </div>
      </div>
    </div>


    <div class="container-custom">
    	<hr class="featurette-divider" style="border-color: black">

<?php 
	require 'shared/footer.php';
?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
