<?php
    require '../../config/database.php';
    $dbCon = new dbController();
	require '../shared/header-tier1.php';
	echo "<body>";
	require '../shared/nav-tier1.php';
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
            <div class="col-md-4 col-md-offset-1">
                <h2>Completed Trainings</h2>
                <hr>
<?php
    error_log($_SESSION['sess_user_id']);
    $trainingResults = $dbCon->executeSelect("SELECT * FROM training_results LEFT JOIN trainings ON (training_results.training_id = trainings.id) WHERE user_id = " . $_SESSION['sess_user_id']);
    if(!count($trainingResults)) {
        echo "<p>No completed trainings</p>";
    } else {
?>
        <table class="results table table-hover">
            <thead>
            <tr>
                <th>Training</th>
                <th>Date</th>
                <th>Total</th>
                <th>Correct</th>
            </tr>
            </thead>
            <tbody>
<?php
        $date = date_create($trainingResults['start_datetime']);
        foreach($trainingResults as $trainingResults) {
            echo"<tr class=\"result-detail\" id=\"". $trainingResults['id'] ."\">\n";
            echo "<td><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> " . $trainingResults['name'] . "</td><td>" . date_format($date,"Y/m/d") . "</td><td>" . $trainingResults['answered_count'] . "</td><td>" . $trainingResults['correct_count'] . "</li>";
            echo"</tr>\n";
        }
    }
?>
            </tbody>
        </table>
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
<script>
    $(document).ready(function() {
        $(".result-detail").click(function(){
            window.location.href = "results.php?tr=" + $(this).attr('id');
        });
    });
</script> 
	</body>
</html>
