<?php 
    require 'verify_user.php';

    if(!AdminVerify::isAdmin()) {
        header("location: login.php");
        exit();
    }
?>
<?php
	require '../shared/header-tier1.php';
?>
<body>

<?php
    $current = 'home';
	require 'nav.php';
?>



    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Language</th>
            </tr>
            </thead>
            <tbody>
<?php

            $con = mysqli_connect("localhost", "root", "", "auditory_training");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con, "SELECT * FROM users WHERE role = 'client'");

	        while($row = mysqli_fetch_array($result)){
                echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['language'] . "</td></tr>";
            }

?>
            <tbody>
        </table>
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
