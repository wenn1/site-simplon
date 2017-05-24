<!doctype html>
<html lang="fr">
	<head>
			<?php include('include/inc_head.php') ?>
	<meta name="description" content="galerie interactive"/>

			<title>Galerie</title>
			<link href="css/lightbox.css" rel="stylesheet" />
			<link href="css/flexslider.css" rel="stylesheet"/>
	</head>

	<body role="document">
			<div id="content">
					<nav id="skip"><?php include('include/inc_skip.php') ?>
					</nav>
					<header id="header" role="banner">
							<?php include('include/inc_header.php') ?>
					</header>
					<nav id="menu" role="navigation"><?php include('include/inc_menu.php') ?>
					</nav>
					<article id="main" role="main">
								<h3>Galeries interactives</h3>
									<section>
										<h4>Photos de la promotion</h4>

										<figure class="floatleft col60 galerie design">
											<figcaption class="decotitre">Photos classe promo 1</figcaption>
														   <img src="medias/photo-promo1.jpg" alt="Promo 1" width="140"/><!--
														--><img src="medias/photo-promo1.jpg" alt="Promo 1" width="140"/><!--
														--><img src="medias/photo-promo1.jpg" alt="Promo 1" width="140"/><!--
														--><img src="medias/photo-promo1.jpg" alt= "Promo 1" width="140"/><!--
														--><img src="medias/photo-promo1.jpg" alt= "Promo 1" width="140"/>
										</figure>


										<figure class="over design2 marge">
										<figcaption class="decotitre">Photos</figcaption>
										<img class="dimensions" src="medias/photo-promo1.jpg" alt= "promo1" width="240"/>
										</figure>

									</section>


									<section class="clear">
										<h4>lightbox</h4>
										<figure class="galerie">
											<figcaption class="decotitre">Galerie photos</figcaption>
											   <a href="medias/photo-promo1.jpg" rel="lightbox[roadtrip]"><img src="medias/photo-promo1.jpg" alt="promo1" width="140px"/></a><!--
											--><a href="medias/photo-promo1.jpg" rel="lightbox[roadtrip]"><img src="medias/photo-promo1.jpg" alt="promo1" width="140px"/></a><!--
											--><a href="medias/photo-promo1.jpg" rel="lightbox[roadtrip]"><img src="medias/photo-promo1.jpg" alt="promo1" width="140px"/></a><!--
											--><a href="medias/photo-promo1.jpg" rel="lightbox[roadtrip]"><img src="medias/photo-promo1.jpg" alt="promo1" width="140px"/></a><!--
											--><a href="medias/photo-promo1.jpg" rel="lightbox[roadtrip]"><img src="medias/photo-promo1.jpg" alt= "promo1" width="140px"/></a>
										</figure>
									</section>

									<section>
									<h4>sliders</h4>
									<!-- Place somewhere in the <body> of your page -->
										<div class="flexslider">
										<ul class="slides">
										<li>
										  <img src="medias/photo-promo1.jpg" alt="Promo1" width="140px"/>
										</li>
										<li>
										  <img src="medias/photo-promo1.jpg" alt="Promo1" width="140px"/>
										</li>
										<li>
										  <img src="medias/photo-promo1.jpg" alt="Promo1" width="140px"/>
										</li>
										<li>
										  <img src="medias/photo-promo1.jpg" alt="Promo1" width="140px"/>
										</li>
									  </ul>
									</div>
								</section>
					</article>
					<aside id="aside" role="complementary"><?php include('include/inc_aside.php') ?>
					</aside>
					<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
					</footer>

			</div><!-- fin #content -->

			<script src="javascript/lightbox.js"></script>
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
