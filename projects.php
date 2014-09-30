<?php $config = parse_ini_file('php/config/default.ini', true); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Projects - ChristopherMarasco.com</title>
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
					<div class="span12">
						<h2>Projects</h2>
						<p class="lead">Learn more about what I have done, what I am doing now, and what I'm looking to do in the future.</p>
					</div>
				</div>
				<div class="row">
					<div class="span4">
						<h3>Past</h3>
						<h4>Monitoring with Nagios/Zabbix</h4>
						<ul>
							<li>Develop a monitoring solution for our infrastructure.</li>
							<li>The first solution I came up with was using the Nagios monitoring application. This application allows for the monitoring of system resources throughout your infrastructure. I implemented this solution with an added script to make writing configuration files easier. This was a good solution. Later on Zabbix was substituted as an alternative. This was an excellent way to learn how to use a Linux operating system.</li>
						</ul>
						<h4>Data Encryption with DeepFreeze</h4>
						<ul>
							<li>Found and implemented a solution for netbooks that is both secure and won't affect performance.</li>
							<li>The solution that I ended up using was Faronic's Deep Freeze. At a kernel level of the hard drive this application will "freeze" the state of your computer leaving any changes made while the computer is "frozen" volatile to a restart. However, the user needed to save crucial files so, a solution within the system was to have a specific partition be available through restarts.</li>
						</ul>
					
					</div>
					<div class="span4">
						<h3>Present</h3>
						<h4>vCenter Homelab</h4>
						<ul>
							<li>Learn more about virtualization and its implementation.</li>
							<li>I have set up a two host lab.</li>
							<li>I've set up the following so far:
								<ul>
									<li>Active Directory 2012 Domain</li>
									<li>SCCM 2012 R2</li>
									<li>SQL 2014</li>
									<li>Remote Desktop Gateway</li>
									<li>VMWare vCenter</li>
								</ul>
							</li>
						</ul>
							<h4>VMware Certified Professional 5 - Data Center Virtualization</h4>
						<ul>
							<li>I have recently finished the required VCP 5 course and am now studying for the exam.  I have scheduled this for October 21 this year.</li>
						</ul>
						<h4>Scripting and Kiosk</h4>
						<ul>
							<li>Learning Powershell to automate various tasks to save time and money</li>
							<li>Creating a kiosk to display critical, up-to-date production information using MySQL and a linux web server</li>
						</ul>
					</div>
					<div class="span4">
						<h3>Future</h3>
						<h4>Arduino</h4>
						<ul>
							<li>I would like to challenge myself to use an Arduino to use various components in different projects at home.  This will help improve critical problem solving and programming skills.</li>
						</ul>
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
