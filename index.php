<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Nicole Adamson</title>

		<!-- FAVICON -->
		<link rel="icon" type="image/jpg" href="http://res.cloudinary.com/dzf64w6kx/image/upload/v1498153885/n-adamson/logos/favicon-gray.jpg">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/lightbox.css">
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
					<div class="container-center container-fluid">
						<a href="index.php">
							<img class="center-image responsive-image" src="https://res.cloudinary.com/dzf64w6kx/image/upload/v1556851309/n-adamson/logos/logo-four.png">
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right" id="navigation">
						<li class="current-menu-item"><a href="index.php">HOME</a></li>
						<li><a href="work.php">WORK</a></li>
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="main">
			<div class="container">
			<hr><div class="row">
					<div class="col-md-12">
						<div id="carousel" class="carousel slide carousel-fade">
							<ol class="carousel-indicators">
								<li data-target="#carousel" data-slide-to="0" class="active"></li>
								<li data-target="#carousel" data-slide-to="1"></li>
								<li data-target="#carousel" data-slide-to="2"></li>
								<li data-target="#carousel" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img class="d-block img-fluid main-image center-block" src="https://res.cloudinary.com/dzf64w6kx/image/upload/v1550543798/n-adamson/personal/noxs-mind-final.jpg">
								</div>
								<div class="item">
									<img class="d-block img-fluid main-image center-block" src="https://res.cloudinary.com/dzf64w6kx/image/upload/v1550549416/n-adamson/personal/cave-of-lost-mail.jpg">
								</div>
								<div class="item">
									<img class="d-block img-fluid main-image center-block" src="https://res.cloudinary.com/dzf64w6kx/image/upload/v1554705476/n-adamson/life-drawings/watercolor-figures/figure-drawing-one.jpg">
								</div>
								<div class="item">
									<img class="d-block img-fluid main-image center-block" src="https://res.cloudinary.com/dzf64w6kx/image/upload/v1554706271/n-adamson/personal/chase-scene-final.jpg">
								</div>
							</div>
							<a class="carousel-control left" href="#carousel" role="button" data-slide="prev"></a>
							<a class="carousel-control right" href="#carousel" role="button" data-slide="next"></a>
						</div>
					</div>
				</div><hr>
			</div>
			<?php include "includes/footer.php" ?>
		</div>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script>
			$('.carousel').carousel({
				interval: 6000
			});
		</script>
	</body>
</html>