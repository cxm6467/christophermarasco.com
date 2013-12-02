<?php $config = parse_ini_file('php/config/default.ini', true); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Contact - ChristopherMarasco.com</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="./img/favicon.png" />
		
		<!-- Bootstrap CSS -->
		<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
		<link href="libs/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
		
		<!-- Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="libs/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Validation -->
		<script  src="js/minval.js" type="text/javascript"></script>
		
		<!-- Custom CSS -->
		<link href="css/custom.css" rel="stylesheet" media="screen" />
		<link href="css/mobile.css" rel="stylesheet" media="screen and (max-width: 480px)" />
		<style type="text/css">
			.network {
				padding-bottom: 5px;
			}
			
		</style>
		
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
					<div class="span12">
						<h2>Contact</h2>
						
						<p class="lead">Interested in learning more about me? Here are a few ways you can contact of me. I look forward to hearing from you!</p>
					</div>
				</div>
				<div class="row">

					<div class="span3">
						<div class="success_box alert-box alert-success text-success">All of the fields were successfully validated!</div>
						<div class="error_box alert-box alert-danger"></div>
						<script type="text/javascript">
							$('.error_box').empty();
							$('.success_box').empty();
						</script>
						<h3>Email</h3>
						<form id="contactForm" action="php/email/sender.php" method="post">
							<div class="control-group">
								<label for="name" class="control-label">Name</label>
								<div class="controls">
									<input type="text" name="name" placeholder="Your first and last name" />
								</div>
							</div>
							<div class="control-group">
								<label for="email" class="control-label">Email</label>
								<div class="controls">
									<input type="text" name="email" placeholder="Your email address" />
								</div>
							</div>
							<div class="control-group">
								<label for="name" class="control-label">Message</label>
								<div class="controls">
									<textarea rows="3" name="message" placeholder="Write your message" ></textarea>
								</div>
							</div>

							<div class="control-group">
								<div class="controls">									
									<button type="submit" class="btn btn-primary">Submit</button>
									<input type="hidden" name="submit" />
									<a href="mailto:cxm6467@gmail.com" class="btn">...or email me directly</a>
								</div>
							</div>
						</form>
					</div>
					<div class="span5">
						<h3>Tweet</h3>
						<a class="twitter-timeline" href="https://twitter.com/cxm6467" data-widget-id="310808570830651392">Tweets by @cxm6467</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<div class="span4">
						<h3>Connect</h3>
						<div class="network clearfix">
							<img src="img/facebook.png" alt="Facebook icon" class="img" />
							<a href="https://facebook.com/chris.marasco">Facebook</a>
						</div>
						<div class="network clearfix">
							<img src="img/twitter.png" alt="Twitter icon" class="img" />
							<a href="http://twitter.com/cxm6467">Twitter</a>
						</div>
						<div class="network clearfix">
							<img src="img/linkedin.png" alt="LinkedIn icon" class="img" />
							<a href="http://www.linkedin.com/pub/christopher-marasco/1a/216/970">LinkedIn</a>
						</div>
						<div class="network clearfix">
							<img src="img/google+.png" alt="Google+ icon" class="img" />
							<a href="https://plus.google.com/105847984108376516782/">Google+</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<!-- Footer -->
			<?php include('php/static/footer.php'); ?>
		</footer>
			<!-- Validator/Analytics -->
			<?php include('js/validate.js'); ?>
			<?php include('js/googleanalytics.js'); ?>
	</body>
</html>