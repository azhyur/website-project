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
	<div class="container">
		<div class="row text-center" style="margin-top: 30px;">
			<h2><em>listen carefully...</em></h2>
		</div>
		<div class="row text-center" style="margin-top: 30px;">
<?php
	shuffle($sounds);
?>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[0]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[0]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[1]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[1]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[2]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[2]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[3]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[3]['name'] . "</button>\n";
?>
			</div>
		</div>
		<div class="row text-center" style="margin-top: 20px;">
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[4]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[4]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[5]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[5]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[6]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[6]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[7]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[7]['name'] . "</button>\n";
?>
			</div>
		</div>
		<div class="row text-center" style="margin-top: 20px;">
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[8]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[8]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[9]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[9]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[10]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[10]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[11]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[11]['name'] . "</button>\n";
?>
			</div>
		</div>
		<div class="row text-center" style="margin-top: 20px;">
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[12]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[12]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[13]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[13]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[14]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[14]['name'] . "</button>\n";
?>
			</div>
			<div class="col-md-3">
<?php
	echo "\t\t\t<button class=\"btn btn-lg active\" type=\"button\" id=\"" . $sounds[15]['id'] . "\" style=\"width: 98%;font-size:20px; line-height: 24px;\">" . $sounds[15]['name'] . "</button>\n";
?>
			</div>
		</div>
		<hr>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-3 text-center">
				<a class="btn btn-lg btn-primary" style="padding: 10px 40px; font-size: 20px; width: 90%;" href="index.php">Play Sound Again</a>
			</div>
			<div class="col-md-3 col-md-offset-6 text-center">
				<a class="btn btn-lg btn-primary" style="padding: 10px 40px; font-size: 20px; width: 90%;" href="index.php">Restart Training</a>
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
