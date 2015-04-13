<?php
	require '../shared/header-tier1.php';
?>
	<body>
<?php 
	require '../shared/nav-simple-tier1.php';
?>
	<div class="container">
		<div class="row" style="padding-top: 100px; padding-bottom:100px;">
			<div class="col-md-6 col-md-offset-3">
				<h1>Please select a training</h1>
                    <ul>
<?php
    
	$con = mysqli_connect("localhost", "root", "", "auditory_training");

	if (mysqli_connect_errno()) {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

	$result = mysqli_query($con, "SELECT * FROM trainings");

	while($row = mysqli_fetch_array($result)){
        echo "<li><a href=\"start.php?t=" . $row['id'] . "\">" . $row['name'] . "</a></li>";
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
