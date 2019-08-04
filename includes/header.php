<nav class="navbar navbar-default navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="container-center container-fluid">
				<a href="/index.php">
					<img class="center-image responsive-image" src="https://res.cloudinary.com/dzf64w6kx/image/upload/v1556851309/n-adamson/logos/logo-four.png">
				</a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right" id="navigation">
				<?php $page_name = $_SERVER['PHP_SELF']; ?>
				<li <?php if (strpos($page_name, "index")): ?> class="current-menu-item" <?php endif; ?>><a href="/index.php">HOME</a></li>
				<li <?php if (strpos($page_name, "work") || strpos($page_name, "portfolio")): ?> class="current-menu-item" <?php endif; ?>><a href="/work.php">WORK</a></li>
				<li <?php if (strpos($page_name, "about")): ?> class="current-menu-item" <?php endif; ?>><a href="/about.php">ABOUT</a></li>
				<li <?php if (strpos($page_name, "contact")): ?> class="current-menu-item" <?php endif; ?>><a href="/contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>