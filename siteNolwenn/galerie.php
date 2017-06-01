<!doctype html>
<html lang="fr">
	<head>
		<?php include('include/inc_head.php') ?>
		<meta name="description" content="galerie interactive"/>
		<title>Galerie</title>
		<link href="css/flexslider.css" rel="stylesheet"/>
	</head>

	<body class="galerie" role="document">
		<div class="content">
			<header class="header" role="banner">
					<?php include('include/inc_header.php') ?>
			</header>
			<nav class="menu" role="navigation">
			<?php $nav_en_cours = 'slider'; ?>
			<?php include('include/inc_menu.php') ?>
			</nav>

			<article id="main2" role="main">
			<div id="ancre_main"></div>
				<section>
					<h3 class="heading_page">Galerie interactive</h3>
					 <h4>Photos de la promotion</h4>
				</section>

				<section>
				<h4>sliders</h4>
				<!-- Place somewhere in the <body> of your page -->
					<div class="flexslider">
						<ul class="slides">
							<li>
							  <img src="galerie/sliderphoto1.jpg" alt="Photo 1" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto2.jpg" alt="Photo 2" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto3.jpg" alt="Photo 3 " width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto4.jpg" alt="Photo 4" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto5.jpg" alt="Photo 5" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto6.jpg" alt="Photo 6" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto7.jpg" alt="Photo 7" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto8.jpeg" alt="Photo 8" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto9.jpg" alt="Photo 9" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto10.jpg" alt="Photo 10" width="140px"/>
							</li>
							<li>
							  <img src="galerie/sliderphoto11.jpg" alt="Photo 11" width="140px"/>
							</li>
					  </ul>
				</div>
				</section>
			</article>

				<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
				</footer>

			</div><!-- fin #content -->

			<script src="javascript/jquery.flexslider-min.js"></script>
			<script>// sliders
			$(document).ready(function() {
				$('.flexslider').flexslider({
					animation: "slide"
				});
			});
			</script>
	</body>
</html>
