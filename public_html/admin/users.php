
<?php 
    require 'verify_user.php';

    if(!AdminVerify::isAdmin()) {
        header("location: login.php");
        exit();
    }
?>
<?php
	require '../shared/header-tier1.php';

    $userId = $_GET["id"];
            $con = mysqli_connect("localhost", "root", "", "auditory_training");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $userResult = mysqli_query($con, "SELECT * FROM users WHERE role = 'client' AND id = " . $userId);
            $user = mysqli_fetch_array($userResult);
            $trainingResult = mysqli_query($con, "SELECT * FROM training_results LEFT JOIN trainings ON (training_results.training_id = trainings.id) WHERE user_id = " . $userId);
            $trainings = array();
            while($training = mysqli_fetch_array($trainingResult)) {
                $trainings[] = $training;
            }
?>
<body>

<?php
    $current = 'home';
	require 'nav.php';
?>



    <div class="container">

    <h3>Name: <?php echo $user['firstname'] . ' ' . $user['lastname'];?></h3>
    <p>Age: <?php echo $user['age']; ?></p>
    <p>Language: <?php echo $user['language']; ?></p>
    <p>Device: <?php echo $user['device']; ?></p>

<hr>

<?php 
    if(count($trainings)) {
    
    ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Training</th>
                <th>Answered</th>
                <th>Correct</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
<?php


            foreach($trainings as $training) {
                $date = date_create($training['start_datetime']);
                echo "<tr><td>" . $training['name'] . "</td><td>" . $training['answered_count'] . "</td><td>" . $training['correct_count'] . "</td><td>" . date_format($date,"Y/m/d") . "</td></tr>";
            }

?>
            <tbody>
        </table>
<?php 
    } else {

?>
    <p>No trainings taken</p>

    <?php
    
    }
            
?>
</div>


<?php
	require '../shared/footer.php';
?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
