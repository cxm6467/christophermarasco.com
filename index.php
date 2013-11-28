<?php $config = parse_ini_file('php/config/default.ini', true); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Home - ChristopherMarasco.com</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="./img/favicon.png" />
		
		<!-- Bootstrap CSS -->
		<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
		<link href="libs/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
		
		<!-- Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="libs/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom CSS -->
		<link href="css/custom.css" rel="stylesheet" media="screen" />
		<link href="css/mobile.css" rel="stylesheet" media="screen and (max-width: 480px)" />
		
		<!-- Custom JS -->
		<script src="js/active.js"></script>
	</head>
	<body>
		<nav>
			<!-- Navbar -->
			<?php include('php/static/navbar.php'); ?>
		</nav>
		<header>
			<!-- Header -->
			<?php include('php/static/header.php'); ?>
		</header>
		<section>
			<!-- Main content -->
			<div class="container">
				<div class="row">
					<div class="span9">
						<h2>Welcome!</h2>
						<p class="lead">I am Chris Marasco, a recent graduate of <a href="http://rit.edu">Rochester Institute of Technology</a> with a B.S. in Information Systems and Technologies. I am from Rochester, NY, and am eager to enter the workforce. I am especially interested in hands-on work within the Systems Administration and Information Technology fields.</p>
						<blockquote>
                            <small>Christopher Marasco</small>
                        </blockquote>
					</div>
					<div class="span3">
						<img src="img/mugshot.jpg" class="img img-polaroid" />
					</div>
				</div>
			</div>
		</section>
		<footer>
			<!-- Footer -->
			<?php include('php/static/footer.php'); ?>
		</footer>
			<!-- Analytics -->
			<?php include('js/googleanalytics.js'); ?>
	</body>
</html>