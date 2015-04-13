<?php
	require '../shared/header-tier1.php';
    $trainingId = $_GET["t"];

	$con = mysqli_connect("localhost", "root", "", "auditory_training");

	if (mysqli_connect_errno()) {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

	$result = mysqli_query($con, "SELECT * FROM trainings WHERE id = " . $trainingId);

    $row = mysqli_fetch_array($result);
    $trainingName = $row['name'];
	$soundResult = mysqli_query($con, "SELECT * FROM trainings_sounds WHERE training_id = " . $trainingId);
    $soundCount = mysqli_num_rows($soundResult);
?>
	<body>
<?php 
	require '../shared/nav-simple-tier1.php';
?>
	<div class="container">
		<div class="row" style="padding-top: 100px; padding-bottom:100px;">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h1>Welcome to your training!</h1>
                <h2><em><?php echo $trainingName; ?></em></h2>
				<br>
                <p>In this training you will be asked to identify <?php echo $soundCount; ?> sounds.</p>
				<p>When you hear the sound, press the cooresponding button.</P>
			</div>
			<div class="col-md-2 col-md-offset-5 text-center" style="margin-top: 10px;">
            <a class="btn btn-large btn-primary" style="padding: 10px 40px; font-size: 20px;" href="training.php?t=<?php echo $trainingId; ?>">Start</a>
			</div>
		</div>
		<hr>
<?php
	require '../shared/footer.php';
?>
	</div>
    <!-- jQuery -->
	<script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	</body>
</html>
