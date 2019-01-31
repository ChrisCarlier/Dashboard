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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
				integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
				crossorigin="anonymous">

				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
						integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
						crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
						integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" 
						crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" 
						integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" 
						crossorigin="anonymous"></script>
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
					<li><a href="/OnlineResume" class="button" target="_blank">Mon CV</a></li>
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
						<h2>Mes Projets</h2>
					</header>
					<div class="row">
					<div class="col-sm">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Movie Manager (WIP)</h5>
							<p class="card-text">
								Catalogue de film utilisant <b>Angular</b>, <b>Bootsrap</b> et l'<b>API de TMDB</b>
							</p>
							<a href="/MovieManager" class="button alt" target="_blank">Movie Manager</a>
						</div>
						</div>
					</div>
					</div>
				</div>
			</section>
		
			<section id="contactme" class="wrapper style2 special">
				
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Contact me</p>
					</header>

					<?php if(array_key_exists('errors', $_SESSION)): ?>
						<div class="container 75%">
							<div style="
								width:auto;
								padding:12px;
								color: #D8000C;
								background-color: #FFD2D2;
								margin:10px 22px;
								margin-left:auto;
								margin-right:auto;
								font-size:1em;
								vertical-align:middle;
								border-radius:5px;
							">
							<?= implode('<br>', $_SESSION['errors']);  ?>
							</div>
						</div>
					<?php  endif; ?>
					<?php if(array_key_exists('success', $_SESSION)): ?>
						<div class="container 75%">
							<div style="
								width:auto;
								padding:12px;
								color: #4F8A10;
								background-color: #DFF2BF;
								margin:10px 22px;
								margin-left:auto;
								margin-right:auto;
								font-size:1em;
								vertical-align:middle;
								border-radius:5px;
							">
							Mail envoyé !
							</div>
						</div>
					<?php  endif; ?>

					<form action="post_contact.php" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" id="inputname" 
									value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '' ?>"/>
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" id="inputmail" 
									value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ?>"/>
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4" id="inputmessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '' ?></textarea>
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

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>