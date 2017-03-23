<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Nicole Adamson</title>

		<!-- FAVICON -->
		<link rel="icon" type="image/jpg" href="images/favicon-gray.jpg">

		<!-- TODO: Add different browser support. -->

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
						<li class="current-menu-item"><a href="index.php">Home</a></li>
						<li><a href="work.php">Work</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
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
									<img class="d-block img-fluid main-image center-block" src="images/personal/fault-city.jpg">
								</div>
								<div class="item">
									<img class="d-block img-fluid main-image center-block" src="images/professional/wonka-final_mini.jpg">
								</div>
								<div class="item">
									<img class="d-block img-fluid main-image center-block" src="images/professional/vesperia-closeup-pg1.jpg">
								</div>
								<div class="item">
									<img class="d-block img-fluid main-image center-block" src="images/personal/ramen-shop.jpg">
								</div>
							</div>
							<a class="carousel-control left" href="#carousel" role="button" data-slide="prev"></a>
							<a class="carousel-control right" href="#carousel" role="button" data-slide="next"></a>
						</div>
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
		<script>
			$('.carousel').carousel({
				interval: 3000
			});
		</script>
	</body>
</html>