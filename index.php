<?php
	session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>CCarlier's Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">CCarlier</a></h1>
				<a href="#nav">Menu</a>
			</header>
			<!-- TEST -->

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-code"></i>
				<h2>Christopher Carlier</h2>
				<p>Dashboard</p>
				<ul class="actions">
					<!-- <li><a href="" class="button big special">Mon CV</a></li> -->
					<li><a href="" class="button">Mon CV</a></li>
				</ul>
			</section>

		<!-- One
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Integer vitae libero acrisus egestas placerat  sollicitudin</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>Integer vitae libero acrisus egestas placerat  sollicitudin</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>
		-->
		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Aliquam Blandit Mauris</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">Tempus Aliquam</a></li>
					</ul>
				</div>
			</section>
		
		<!-- Three 
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Magna sed consequat tempus</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>
				</div>
			</section>
		-->
		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Contact me</p>
					</header>

					<?php if(array_key_exists('errors', $_SESSION)): ?>
						
						<div style="
							margin: 10px 0px;
							padding:12px;
							color: #D8000C;
							background-color: #FFD2D2;
							margin:10px 22px;
    						font-size:2em;
    						vertical-align:middle;
						">
							test
							<i class="fa fa-times-circle"></i>
							<?= implode('<br>', $_SESSION['errors']);  ?>
						</div>
					<?php endif; ?>

					<form action="post_contact.php" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" id="inputname"/>
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" id="inputmail" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4" id="inputmessage"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<!--
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					-->
					<ul class="copyright">
						<li>&copy; Christopher Carlier.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>