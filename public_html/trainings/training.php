<?php
	require '../shared/header-tier1.php';

	$sounds = array(
		array(
			"id"		=> "airplane_flying",
			"filename"	=> "../../audiofiles/89_airplaneflyingT3.mp3",
			"name"		=> "Airplane Flying"

		),
		array(
			"id"		=> "birds_chirping",
			"filename"	=> "../../audiofiles/89_birdschirpingT1.mp3",
			"name"		=> "Birds Chirping"

		),
		array(
			"id"		=> "typing",
			"filename"	=> "../../audiofiles/typing_3.mp3",
			"name"		=> "Typing"

		),
		array(
			"id"		=> "rooster",
			"filename"	=> "../../audiofiles/rooster_1.mp3",
			"name"		=> "Rooster"

		),
		array(
			"id"		=> "burp",
			"filename"	=> "../../audiofiles/burp_1.mp3",
			"name"		=> "Burp"

		),
		array(
			"id"		=> "doorbell",
			"filename"	=> "../../audiofiles/doorbell_1.mp3",
			"name"		=> "Doorbell"

		),
		array(
			"id"		=> "clapping",
			"filename"	=> "../../audiofiles/clapping_1.mp3",
			"name"		=> "Clapping"

		),
		array(
			"id"		=> "helicopter",
			"filename"	=> "../../audiofiles/helicopter_flying_3.mp3",
			"name"		=> "Helicopter"

		),
		array(
			"id"		=> "horse",
			"filename"	=> "../../audiofiles/horse_neighing_2.mp3",
			"name"		=> "Horse"

		),
		array(
			"id"		=> "siren",
			"filename"	=> "../../audiofiles/siren_4.mp3",
			"name"		=> "Siren"

		),
		array(
			"id"		=> "coughing",
			"filename"	=> "../../audiofiles/coughing_1.mp3",
			"name"		=> "Coughing"

		),
		array(
			"id"		=> "machine_gun",
			"filename"	=> "../../audiofiles/machine_gun_1.mp3",
			"name"		=> "Machine Gun"

		),
		array(
			"id"		=> "yawning",
			"filename"	=> "../../audiofiles/yawning_1.mp3",
			"name"		=> "Yawning"

		),
		array(
			"id"		=> "thunder",
			"filename"	=> "../../audiofiles/thunder_8.mp3",
			"name"		=> "Thunder"

		),
		array(
			"id"		=> "zipper",
			"filename"	=> "../../audiofiles/zipper_10.mp3",
			"name"		=> "Zipper"

		),
		array(
			"id"		=> "busy_signal",
			"filename"	=> "../../audiofiles/telephone_busy_signal_3.mp3",
			"name"		=> "Busy Signal"

		)
	);
?>
	<body>
<?php 
	require '../shared/nav-simple-tier1.php';
?>
		<ul>
<?php
	shuffle($sounds);
	foreach ($sounds as $sound) {
		echo "\t\t\t<button class=\"btn btn-large\" type=\"button\" id=\"" . $sound['id'] . "\">" . $sound['name'] . "</button>\n";
	}
?>

		</ul>


<?php
	require '../shared/footer.php';
?>


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
		echo "{id:\"" . $sound['id'] . "\", fileName:\"" . $sound['filename'] . "\"}";
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
