<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Contact | Nicole Adamson</title>

		<!-- FAVICON -->
		<link rel="icon" type="image/jpg" href="images/favicon-gray.jpg">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="container-fluid">
						<a href="index.php">
							<img src="images/logo.jpg">
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right" id="navigation">
						<li><a href="index.php">Home</a></li>
						<li><a href="work.php">Work</a></li>
						<li><a href="about.php">About</a></li>
						<li class="current-menu-item"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="main">
			<div class="container">
				<hr><div class="row">
					<div class="col-md-12">
						<h1 class="navigation-title">CONTACT</h1>
					</div>
				</div><hr>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>
							If you have any questions or would like to know more about my artwork please feel free to contact me!
						</p>
						<hr>
						<p>
							Ontario, California
						</p>
						<hr>
						<p>
							<b>E:</b> ncladamson@gmail.com<br>
							<b>P:</b> 909.717.4726<br>
							<b>H:</b> 24/7/365 days
						</p>
					</div>
					<br>
					<div class="col-md-6">
						<?php
							if(isset($_POST['submit'])){
								$to = "ericjaychi@gmail.com"; // this is your Email address
								$from = $_POST['email']; // this is the sender's Email address
								$name = $_POST['name'];
								$subject = "Form submission";
								$subject2 = "Copy of your form submission";
								$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
								$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

								$headers = "From:" . $from;
								$headers2 = "From:" . $to;
								mail($to, $subject, $message, $headers);
								mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender


								echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
								// You can also use header('Location: thank_you.php'); to redirect to another page.
							}
						?>
						<form action="" method="post">
							<input type="text" class="validate-required" name="name" placeholder="Your Name" />
							<input type="text" class="validate-required validate-email" name="email" placeholder="Your Email Address" />
							<textarea class="validate-textarea" name="message" rows="4" placeholder="Your Message"></textarea>
							<input class="button" type="submit" name="submit" value="Submit" />
						</form>
					</div>
				</div><hr>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="resume">
							<a href="../pdfs/resume.pdf">RESUME</a> | <a href="https://www.linkedin.com/in/nicole-adamson-a1730988/">LINKEDIN</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">© 2017 NICOLE ADAMSON. ANY DISTRIBUTION OR ALTERATIONS OF ANY IMAGE IS PROHIBITED WITHOUT PERMISSION.</p>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
