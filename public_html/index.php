
<?php
    require 'shared/header.php';
?>
<body>

<?php
    $current = 'home';
    require 'shared/nav.php';
?>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
            	<div class="row">
            		<div class="col-sm-12" style="background-color: white;">
                		<h1 style="font-family:Georgia;" >Auditory Training</h1>
                		<div class="row">
                			<div class="col-sm-12">
                    				<img src="img/rush-logo-med.jpg"/>
                			</div>
                		</div>
            		</div>
            	</div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Second Featurette -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="img/ear.png">
	    <img class="featurette-image img-circle img-responsive pull-right" src="img/bulb.gif">
            <h2 class="featurette-heading">Improve
            <span class="text-muted">sound perception.</span>
            
            <span class="featurette-heading" style="float:right">Gain confidence 
            <span class="text-muted">in recognition.</span>
            </h2>
        </div>

	<br>
	<br>

	<div class="row marketing">
        	<div class="col-lg-3">
          		<h4>Improve Over Time</h4>
          		<p>Continual training will improve your auditory abilities.</p>

			<br>
			<br>

          		<h4>Talk To Others</h4>
          		<p>Communicate with professionals or speak to other people with auditory disabilites with our user forums.</p>
        	</div>

        	<div class="col-lg-3">
          		<h4>Work Towards A Cause</h4>
          		<p>Your auditory results will be used for data by Auditory Disability specialists in advancing treatment for patients.</p>

			<br>

          		<h4>Learn About Yourself</h4>
          		<p>Find out how good your hearing is and watch how you improve over time.</p>
        	</div>

		<div class="col-lg-6">
			<br>
			<br>
			<br>
			<center><p><a class="btn btn-lg btn-primary" style="width:65%;font-size: 48px;" href="registration/registration.php" role="button">Sign Up Today!</a></p><center>
		</div>
      	</div>


      <hr class="featurette-divider" style="border-color: black">
        <!-- Third Featurette -->
        <div class="featurette" id="contact">
           <img class="featurette-image img-circle img-responsive pull-left" src="img/faqs.png"alt="http://placehold.it/250x250">
            <h2 class="featurette-heading">Have Questions?
                <span class="text-muted"></span>
            </h2>
            <p class="lead">Q: What will I be tested on?<br/>A: Research tested speech, music, and environment sounds.<br/>
            Q: What kind of trainings do you offer?<br/>
            A: Training modules that adjust to you level of hearing such as scene scenarios, identify sounds with images,.
            <li>Identify sounds with image buttons</li>
            <li>Have a scene of environmental sounds e.g. streets, nature.</li>
            <li>Sequence of sounds, identify at the end what the sound is.</li>
            <li>Drag-and-drop after the order of sounds listened.</li>
            </p>
        </div>

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
