<?php
    require '../../config/database.php';
    $dbCon = new dbController();
	require '../shared/header-tier1.php';
    $trainingId = $_GET["t"];
    session_start();
    $userId = $_SESSION['sess_user_id'];

    // insert the new training result set
    $trainingResultId = $dbCon->executeInsert("
        INSERT INTO training_results(user_id, training_id, answered_count, correct_count, start_datetime, finish_datetime)
        VALUES( " . $userId . ", " . $trainingId . ", 0, 0, now(), 0)
    ");

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
			<h2><em>listen carefully... <span id="count-down"></span></em></h2>
		</div>
		<div class="row text-center" style="margin-top: 30px;">
<?php
    foreach($sounds as $sound) {
        echo "<div class=\"col-md-3\">";
        echo "<button class=\"btn btn-lg active sound-button\" type=\"button\" id=\"" . $sound['sound_id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sound['name'] . "</button>\n";
        echo "</div>";
    }

?>
		</div>
		<hr>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-3 text-center">
				<button id="replay" class="btn btn-lg btn-primary" style="padding: 10px 40px; font-size: 20px; width: 90%;">Play Sound Again</button>
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
	var current_index = null;
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

    function countDown(sound, current_index) {
        var seconds = 5;
        $(".sound-button").prop('disabled', true); 
        var clock = setInterval(function () {
            $("#count-down").text(seconds);
            if(--seconds < 0) {
                $(".sound-button").prop('disabled', false); 
                sound.setAttribute("src", sounds[current_index].fileName);
                clearInterval(clock);
            }
        }, 1000);
    }

    $(document).ready(function() {
        current_index = 0;
        var audioElement = document.createElement("audio");
        audioElement.setAttribute("autoplay", false); 
        audioElement.addEventListener("load", function() { audioElement.play(); }, true);
        countDown(audioElement, current_index);

        $("#replay").click(function () {
            // clearInterval(clock);
            countDown(audioElement, current_index);
        });

        $(".sound-button").click(function(){
            var correct = $(this).attr("id") == sounds[current_index].id;
            $.post("sound.php", {
                soundId: sounds[current_index].id,
                trainingResultId: <?php echo '"' . $trainingResultId . '"' . ','?>
                result: correct
            },
            function(data, status){
                // do something on return
                // alert("Data: " + data + "\nStatus: " + status);
            });
            if(++current_index == sounds.length) {
                var location = 
                window.location.href = "results.php?tr=<?php echo $trainingResultId ?>";
            } else {
                countDown(audioElement,current_index);
            }
        });
    });
</script> 
	</body>
</html>
