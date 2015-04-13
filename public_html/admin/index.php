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
