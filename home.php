<?php
	
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
	
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SmartHome</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<script src="https://use.fontawesome.com/a7239398f1.js"></script>
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
				    <img src="images/small-logo.png" class="small-logo">
					<h1 id="logo"><a href="http://www.alejandronepro.com/smarthome/home.php">SmartHome <span>| Living it Well</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><strong>Welcome, <?php echo $userRow['username']; ?></strong></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									<li><a href="http://www.alejandronepro.com/smarthome/settings.php">Settings</a></li>
									<li class="submenu">
										<a href="#">Devices</a>
										<ul>
											<li><a href="http://www.alejandronepro.com/smarthome/camaras.php">Cameras</a></li>
											<li><a href="http://www.alejandronepro.com/smarthome/lights.php">Lights</a></li>
											<li><a href="http://www.alejandronepro.com/smarthome/alarm.php">Alarm</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="logout.php?logout" class="button special">LOG OFF</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
<!--							<h2>SMARTHOME</h2>-->
							<img src="images/logo.png" width="300px;">
						</header>
						
						<footer>
							<ul class="buttons vertical">
								<li><a href="mailto:contact@alejandronepro.com?subject=Contact%20Support" class="button fit scrolly"><!--[-->Email Support<!--]--></a></li>
							</ul>
						</footer>

					</div>
					
					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<a href="cameras.php"><span class="icon featured fa-video-camera"></span></a>
										<header>
											<a href="cameras.php"><h3><!--[-->Cameras<!--]--></h3></a>
										</header>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<a href="lights.php"><span class="icon featured fa-lightbulb-o"></span></a>
										<header>
											<a href="lights.php"><h3><!--[-->Lights<!--]--></h3></a>
										</header>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<a href="alarm.php"><span class="icon featured fa-bell"></span></a>
										<header>
											<a href="alarm.php"><h3><!--[-->Alarm<!--]--></h3></a>
										</header>
									</section>

								</div>
							</div>
						</section>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-home"></span>
						<h2><!--[-->Keep your Home safe with<!--]--> <strong><!--[-->SmartHome<!--]--></strong> 
						<br />
						</h2>
                    </header>
				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2><!--[-->Continue<strong> Living it well</strong>!<!--]--></h2>
						<p></p>
					</header>
					

				</section>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="https://twitter.com/" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://plus.google.com/collections/featured" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="https://github.com/" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://dribbble.com/" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; SmartHome 2017</li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.scrollgress.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>

	</body>
</html>
<?php ob_end_flush(); ?>