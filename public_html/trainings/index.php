<?php
    require '../../config/database.php';
	require '../shared/header-tier1.php';
	echo "<body>";
	require '../shared/nav-simple-tier1.php';
    $dbCon = new dbController();
?>
	<div class="container">
		<div class="row" style="padding-top: 100px; padding-bottom:100px;">
			<div class="col-md-6 col-md-offset-3">
				<h1>Please select a training</h1>
                <ul>
<?php
    $trainings = $dbCon->executeSelect("SELECT * FROM trainings");
    foreach($trainings as $training) {
        echo "<li><a href=\"start.php?t=" . $training['id'] . "\">" . $training['name'] . "</a></li>";
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
