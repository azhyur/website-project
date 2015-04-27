<?php
    require '../../config/database.php';
    $dbCon = new dbController();
    require '../shared/header-tier1.php';
    $trainingResultId = $_GET["tr"];

    $trainingResult = $dbCon->executeSelect("SELECT * FROM training_results WHERE id = " . $trainingResultId);
    $total = $trainingResult[0]['answered_count'];
    $correct = $trainingResult[0]['correct_count'];

    echo "<body>";
    require '../shared/nav-tier1.php';
?>
	<div class="container">
		<div class="row" style="padding-top: 100px; padding-bottom:100px;">
			<div class="col-md-6 col-md-offset-3 text-center">
            <h1><?php if($correct == $total) { echo "Congratulations!"; } else { echo "Nice Try!";} ?></h1>
                <h2>You answered <?php echo $correct; ?> out of <?php echo $total; ?> correctly!</h2>
			</div>
			<div class="col-md-2 col-md-offset-5 text-center" style="margin-top: 10px;">
				<a class="btn btn-large btn-primary" style="padding: 10px 40px; font-size: 20px;" href="index.php">Restart</a>
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
