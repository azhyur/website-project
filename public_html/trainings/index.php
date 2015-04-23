<?php
    require '../../config/database.php';
    $dbCon = new dbController();
	require '../shared/header-tier1.php';
	echo "<body>";
	require '../shared/nav-simple-tier1.php';
?>
	<div class="container">
		<div class="row" style="padding-top: 100px; padding-bottom:100px;">
			<div class="col-md-4 col-md-offset-1 text-center">
				<h2>Please select a training</h2>
                <ul class="text-left">
<?php
    $trainings = $dbCon->executeSelect("SELECT * FROM trainings");
    foreach($trainings as $training) {
        echo "<li><a href=\"start.php?t=" . $training['id'] . "\">" . $training['name'] . "</a></li>";
    }
?>
                </ul>
            </div>
            <div class="col-md-4 col-md-offset-1 text-center">
                <h2>Completed Trainings</h2>
                <ul class="text-left">
<?php
    session_start();
    $trainingResults = $dbCon->executeSelect("SELECT * FROM training_results LEFT JOIN trainings ON (training_results.training_id = trainings.id) WHERE " . $_SESSION['sess_user_id']);
    if(!count($trainingResults)) {
        echo "<p>No completed trainings</p>";
    } else {
        $date = date_create($trainingResults['start_datetime']);
        foreach($trainingResults as $trainingResults) {
            echo "<li>" . $trainingResults['name'] . " : completed " . date_format($date,"Y/m/d") . "</li>";
        }
    }
?>
                </ul>
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
