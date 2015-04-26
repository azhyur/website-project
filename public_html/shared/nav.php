
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container-topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <a href="index.php"><img id="logo" src="img/rush_logo32x32.png" a href="../index.php"/></a>
                    <a class="navbar-brand topnav" href="index.php">Home</a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($current == 'about') echo 'class="current"'; ?>><a href="about.php">About Us</a></li>
                    <li <?php if($current == 'contact') echo 'class="current"'; ?>><a href="contact.php">Contact</a></li>
                    <li <?php if($current == 'registration') echo 'class="current"'; ?>><a href="registration/registration.php">Register</a></li>
<?php

    session_start();
    if(!isset($_SESSION['sess_user_id'])){
        echo "<li><a href=\"login/login.php\">Login</a></li>";
    }
    else{
        echo "<li><a href=\"trainings/\">Trainings</a></li>";
        echo "<li><a href=\"profile/profile.php\">Profile</a></li>";
        echo "<li><a href=\"profile/logout_user.php\">Logout</a></li>";
    }
?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
