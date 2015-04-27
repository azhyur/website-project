<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form'; 
		$to = 'ecurri3@gmail.com'; 
		$subject = 'Message from Contact Demo';
		
		$body ="From: $name\n\nE-Mail: $email\n\nMessage:\n\n\t$message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank you for contacting us! We will be in touch as soon as possible.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again.</div>';
	}
}
	}
?>

<?php 
	require 'shared/header-jumbotron.php';
?>

<body>

<?php
    $current = 'contact';
?>

<?php 
	require 'shared/nav.php';
?>

    <div class="container">

	<div class="jumbotron">
            <h1>Contact Us</h1>
            <form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Your Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Your Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Your Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" placeholder="Enter your message here..."><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
      	</div>
    </div>


    <div class="container-custom">
    	<hr class="featurette-divider" style="border-color: black">

<?php 
	require 'shared/footer.php';
?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
