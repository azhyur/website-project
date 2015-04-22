<?php
    require '../../config/database.php';
    $dbCon = new dbController();
	require '../shared/header-tier1.php';
    $trainingId = $_GET["t"];

    $trainings = $dbCon->executeSelect("SELECT * FROM trainings WHERE id = " . $trainingId);
    $sounds = $dbCon->executeSelect( 
        "SELECT * 
        FROM trainings_sounds 
        LEFT JOIN sounds ON (trainings_sounds.sound_id = sounds.id) 
        WHERE training_id = " . $trainingId . " 
        ORDER BY sounds.name ASC");

    echo "<body>";
    require '../shared/nav-simple-tier1.php';

?>
	<div class="container">
		<div class="row text-center" style="margin-top: 30px;">
			<h2><em>listen carefully...</em></h2>
		</div>
		<div class="row text-center" style="margin-top: 30px;">
<?php
    foreach($sounds as $sound) {
        echo "<div class=\"col-md-3\">";
        echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sound['sound_id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sound['name'] . "</button>\n";
        echo "</div>";
    }

?>
		</div>
		<hr>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-3 text-center">
				<a class="btn btn-lg btn-primary" style="padding: 10px 40px; font-size: 20px; width: 90%;" href="index.php">Play Sound Again</a>
			</div>
			<div class="col-md-3 col-md-offset-6 text-center">
            <a class="btn btn-lg btn-primary" style="padding: 10px 40px; font-size: 20px; width: 90%;" href="start.php?t=<?php echo $trainingId; ?>">Restart Training</a>
			</div>
		</div>

	<hr class="featurette-divider">

<?php
	require '../shared/footer.php';
?>
	</div>


    <!-- jQuery -->
	<script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
<script>
	var correct_ans = false;
	var current_id = null;
	var sounds = new Array(
<?php
	shuffle($sounds);
	foreach ($sounds as $sound) {
		echo "{id:\"" . $sound['id'] . "\", fileName:\"../audiofiles/" . $sound['filename'] . "\"}";
		if($sound != end($sounds)) {
			echo ",";
		}
	}
?>
	);
    $(document).ready(function() {
		var audioElement = document.createElement('audio');
		audioElement.setAttribute('src', sounds[0].fileName);
		audioElement.setAttribute('autoplay', false); 
		audioElement.addEventListener("load", function() { audioElement.play(); }, true);
		var seae = setInterval(function(){ audioElement.play();}, 10000);

		$("#" + sounds[0].id).click(function() {clearInterval(seae);});
    });
</script> 
	</body>
</html>
