
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
		    <div class="col-sm-12" style="background-color: white; border-style: solid; border-color: #9aedb5; border-width: 15px; margin-bottom: 50px">
                        <h1>Auditory Training</h1>
                    </div>
		</div>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="img/rush-logo-big.jpg"/>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

<!--         First Featurette
<div class="featurette" id="about">
    <img class="featurette-image img-circle img-responsive pull-right" src="img/Shafiro.gif">
    <h2 class="featurette-heading">Mission Statement
        <span class="text-muted">Summary</span>
    </h2>
    <p class="lead">Professor Valeriy Shafiro at Rush University in the department of Communication Disorders specializes in working with audiology and speech perception. 
        <p class="lead">Previous work from Professor Shafiro and team has shown clear benefits of home-based computerized auditory training for users of cochlear implants (implantable electronic devices that stimulate the auditory nerve bypassing normal hearing mechanisms).</p>
        <p class="lead">To provide greater access to these training methods and allow more rigorous testing we would like to implement the testing and training protocols online. </p>
    </p>
</div>

<hr class="featurette-divider"> -->

        <!-- Second Featurette -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="img/ear.png">
            <h2 class="featurette-heading">Improve
                <span class="text-muted">sound perception.</span>
            </h2>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="contact">
            <img class="featurette-image img-circle img-responsive pull-right" src="img/bulb.gif">
            <h2 class="featurette-heading">Gain confidence
                <span class="text-muted">in recognizing sounds.</span>
            </h2>
<!--             <p class="lead">PLACEHOLDER: If readers have made it this far, then they must be interested. We can use this last spot to explain what to do next in order to participate in auditory training.</p> -->
        </div>

        <hr class="featurette-divider">


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
