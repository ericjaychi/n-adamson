<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Contact | Nicole Adamson</title>

		<!-- FAVICON -->
		<link rel="icon" type="image/jpg" href="http://res.cloudinary.com/dzf64w6kx/image/upload/v1498153885/n-adamson/logos/favicon-gray.jpg">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/lightbox.css">
		<?php include "includes/analytics.php" ?>
	</head>
	<body>
		<?php include "includes/header.php" ?>
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
						<div id="formMessages"></div>
						<form id="ajaxContact" name="contactForm" action="helpers/mail.php" method="post" onsubmit="validateForm();">
							<input id="name" type="text" class="validate-required" name="name" placeholder="Your Name" />
							<input id="email" type="text" class="validate-required validate-email" name="email" placeholder="Your Email Address" />
							<textarea id="message" class="validate-textarea" name="message" rows="4" placeholder="Your Message"></textarea>
							<input class="button" type="submit" name="submit" value="Submit" />
						</form>
					</div>
				</div><hr>
			</div>
			<?php include "includes/footer.php" ?>
		</div>

		<script src="js/mailer.js"></script>
	</body>
</html>
